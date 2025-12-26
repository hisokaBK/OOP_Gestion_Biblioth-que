<?php
class Borrow
{
    private  $id;
    private  $readerId;
    private  $bookId;
    private  $borrowDate;
    private  $returnDate;

    public function __construct($id,$readerId,$bookId,$borrowDate,$returnDate) {
        $this->id = $id;
        $this->readerId = $readerId;
        $this->bookId = $bookId;
        $this->borrowDate = $borrowDate;
        $this->returnDate = $returnDate;
    }

    public function getId(){ return $this->id ;}
    public function getReaderId(){ return $this->readerId ;}
    public function getBookId(){ return $this->bookId ;}
    public function getBorrowDate(){ return $this->borrowDate ;}
    public function getReturnDate(){ return $this->returnDate ;}

    public function setId($id){  $this->id=$id;}
    public function setReaderId($readerId){  $this->readerId=$readerId ;}
    public function setBookId($bookId){  $this->bookId=$bookId ;}
    public function setBorrowDate($borrowDate){  $this->borrowDate=$borrowDate ;}
    public function setReturnDate($returnDate){  $this->returnDate=$returnDate;}

}