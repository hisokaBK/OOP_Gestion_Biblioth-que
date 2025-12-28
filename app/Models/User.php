<?php

abstract class User
{
    private  $id;
    private  $firstName;
    private  $lastName;
    private  $email;
    private  $password;
    private  $role; 
    private  $created_at; 

    public function __construct($id,$firstName,$lastName,$email,$password,$role,$created_at) {
        $this->id = $id;
        $this->firstName = $firstName;
        $this->lastName  = $lastName;
        $this->email     = $email;
        $this->password  = $password;
        $this->role      = $role;
        $this->created_at     = $created_at;
    }

    
    public function getId(){ return $this->id ;}
    public function getFirstName(){ return $this->firstName ;}
    public function getLastName(){ return $this->lastName ;}
    public function getEmail(){ return $this->email ;}
    public function getPassword(){ return $this->password ;}
    public function getRole(){ return $this->role ;}
    public function getCreated_at(){ return $this->created_at ;}

    public function setFirstName($firstName){ $this->firstName=$firstName ; }
    public function setLastName($lastName){ $this->lastName=$lastName ; }
    public function setEmail($email){ $this->email=$email ; }
    public function setPassword($password){ $this->password=$password; }
    public function setRole($role){ $this->role=$role ; }
    public function setCreated_at($created_at){ $this->created_at=$created_at ; }
}
