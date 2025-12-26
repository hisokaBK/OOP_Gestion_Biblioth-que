<?php

class Book
{
    private  $id;
    private  $title;
    private  $author;
    private  $year;
    private  $status; 

    public function __construct($id,$title,$author,$year,$status ) {
        $this->id     = $id;
        $this->title  = $title;
        $this->author = $author;
        $this->year   = $year;
        $this->status = $status;
    }

    public function getId(){ return $this->id;}
    public function getTitle(){ return $this->title;}
    public function getAuthor(){ return $this->author;}
    public function getYear(){ return $this->year;}
    public function getStatus(){ return $this->status;}

    public function setTitle($title){  $this->title=$title ;}
    public function setAuthor($author){  $this->author=$author ;}
    public function setYear($year){  $this->year=$year ;}
    public function setStatus($status){  $this->status=$status;}

}
