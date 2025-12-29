<?php

class Book
{
    private  $id;
    private  $title;
    private  $image ;
    private  $author;
    private  $year;
    private  $description;
    private  $status; 
    private  $created_at;

    public function __construct($id,$title,$author,$year,$status,$description,$image,$created_at ) {
        $this->id     = $id ;
        $this->title  = $title ;
        $this->author = $author ;
        $this->year   = $year ;
        $this->status = $status ;
        $this->image  = $image ;
        $this->created_at  = $created_at ;
        $this->description  = $description ;
    }

    public function getId(){ return $this->id;}
    public function getTitle(){ return $this->title;}
    public function getAuthor(){ return $this->author;}
    public function getYear(){ return $this->year;}
    public function getStatus(){ return $this->status;}
    public function getImage(){ return $this->image;}
    public function getCreated_at(){ return $this->created_at;}
    public function getDescription(){ return $this->description;}

    public function setTitle($title){  $this->title=$title ;}
    public function setAuthor($author){  $this->author=$author ;}
    public function setYear($year){  $this->year=$year ;}
    public function setStatus($status){  $this->status=$status;}
    public function setImage($image){  $this->image=$image;}
    public function setCreated_at($created_at){  $this->created_at=$created_at;}
    public function setDescription($description){  $this->description=$description;}

}
