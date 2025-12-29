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
                      $_SESSION['books']=[...$_SESSION['books'],new Book($book['id'],$book['title'],$book['author'],$book['year'],$book['status'],$book['description'],$book['image'],$book['created_at'])];
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
                       $_SESSION['oneBooks']= new Book($book['id'],$book['title'],$book['author'],$book['year'],$book['status'],$book['description'],$book['image'],$book['created_at']);
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

    public static function updateGetBook($id){
            $conn = Database::getConnection();
            
    }
    public static function updateBook( $id, $data){
            $conn = Database::getConnection();
        
            $title       = htmlspecialchars(trim($data['title']));
            $author      = htmlspecialchars(trim($data['author']));
            $year        = htmlspecialchars($data['year']);
            $description = htmlspecialchars(trim($data['description']));
            $image       = htmlspecialchars(trim($data['image']));
            $status      = $data['status'];
        
            if (empty($title) || empty($author) || empty($description) || empty($image)) {
                $_SESSION['error'] = "Tous les champs sont obligatoires";
                return false;
            }
        
            $stmt = $conn->prepare("
                UPDATE books
                SET title = ?, author = ?, year = ?, description = ?, image = ?, status = ?
                WHERE id = ?
            ");
        
            if ($stmt->execute([$title,$author,$year,$description,$image,$status,$id])) {
                $_SESSION['success'] = "Livre modifié avec succès";
                return true;
            }

        }


    public static function addBooks($data){
        $conn = Database::getConnection();
    
        $title       = htmlspecialchars(trim($data['title'] ));
        $author      = htmlspecialchars(trim($data['author'] ));
        $year        = htmlspecialchars($data['year']);
        $description = htmlspecialchars(trim($data['description'] ));
        $image       = htmlspecialchars(trim($data['image'] ));
    
        if (empty($title) || empty($author) || empty($description) || empty($image) || $year <= 0) {
            $_SESSION['error'] = "Tous les champs sont obligatoires";
            return false;
        }
    
        if ($year > date('Y')) {
            $_SESSION['error'] = "Année invalide";
            return false;
        }
    
        $stmt = $conn->prepare("
            INSERT INTO books (title, image, author, year, description)
            VALUES (?, ?, ?, ?, ?)
        ");
    
        if ($stmt->execute([$title, $image, $author, $year, $description])) {
            $_SESSION['success'] = "Livre ajouté avec succès";
            return true;
        }
    
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