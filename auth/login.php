<?php 
    include '../functions.php' ;  
    include '../connect.php';
    $password = sha1($_POST['password']) ;
    $email = filterRequest("email") ; 

    getAllData("users" , "email = ? AND  password = ?" , array($email , $password)) ; 


