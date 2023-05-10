<?php 
include '../connect.php'; 
include '../functions.php'  ;

    $email = filterRequest("email") ;  
    
    $password = sha1($_POST('password')) ; 

    $data = array(
        "password"=>$password , 
    );
 
    updateData( 
        "users", $data , "email = '$email'" 
    );  


