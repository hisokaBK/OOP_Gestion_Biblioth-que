<?php 

  class BorrowController {
          public static function borrowBook($idUser,$idBook){
                   $conn = Database::getConnection();
                   $statusBook =$conn->prepare("SELECT status FROM books where id= ?");
                   $statusBook ->execute([$idBook]);
                   $statusBook = $statusBook->fetch();

                   if($statusBook['status'] == "available"){
                        $borrowDate = date('Y-m-d H:i:s');
                        $returnDate = date('Y-m-d H:i:s', strtotime('+5 days'));

                        $bookStmt = $conn->prepare("UPDATE books SET status='borrowed' WHERE id=?");
                        $bookStmt->execute([$idBook]);

                        $newBorrow = $conn->prepare("INSERT into borrows (readerId,bookId,borrowDate,returnDate) values (?,?,?,?)");
                        $newBorrow->execute([$idUser,$idBook,$borrowDate,$returnDate]);                        
                   }

                   
                  
          }

  }