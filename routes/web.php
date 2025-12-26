<?php 

require_once  __DIR__ .'/../app/Models/Reader.php';


$x =new Reader(1,'bilal','bakessou','email.com','pass');

echo $x->getFirstName() ;
