<?php

require_once __DIR__ . '/../models/Book.php';

class BookController{
   
    public static function getBooks(){
           $conn = Database::getConnection();
            $_SESSION['books']=[];

            $books = $conn->prepare("
                    SELECT *
                    FROM books
                 ");
            $books->execute();
        
            $books = $books->fetchAll();
            foreach($books as $book){
                      $_SESSION['books']=[...$_SESSION['books'],new Book($book['id'],$book['title'],$book['author'],$book['year'],$book['status'],$book['image'],$book['created_at'])];
                   
            }
    }

    public static function getOneBooks($id){
            $conn = Database::getConnection();

            $bookStmt = $conn->prepare("
                SELECT *
                FROM books
                WHERE id = ?
            ");
            
            $bookStmt->execute([$id]);
            
            $book = $bookStmt->fetch();
                       $_SESSION['oneBooks']= new Book($book['id'],$book['title'],$book['author'],$book['year'],$book['status'],$book['image'],$book['created_at']);
    }

    public static function deleteBooks($id){
            $conn = Database::getConnection();

            $bookStmt = $conn->prepare("
                DELETE
                FROM books
                WHERE id = ?
            ");
            
            $bookStmt->execute([$id]);
    }

    public static function edit($id){
            $conn = Database::getConnection();

            $bookStmt = $conn->prepare("
                DELETE
                FROM books
                WHERE id = ?
            ");
            
            $bookStmt->execute([$id]);
    }
   
}
 // public function __construct(PDO $conn)
    // {
    //     $this->bookModel = new Book($conn);
    // }

    // public function index()
    // {
    //     $books = $this->bookModel->getAll();
    //     require __DIR__ . '/../views/books/index.php';
    // }

    // public function edit($id)
    // {
    //     $book = $this->bookModel->getById($id);
    //     require __DIR__ . '/../views/books/edit.php';
    // }

    // public function update($id, $data)
    // {
    //     $this->bookModel->update($id, $data);
    //     header('Location: /books');
    //     exit;
    // }

    // public function delete($id)
    // {
    //     $this->bookModel->delete($id);
    //     header('Location: /books');
    //     exit;
    // }