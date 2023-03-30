<?php
include "../connect.php" ; 
$username = filterRequest("username") ;  
$password = sha1("password") ;  
$email = filterRequest("email") ;  
$phone = filterRequest("phone") ;  
$verifycode =  "0" ; 
$stmt = $con->prepare('SELECT * FROM users WHERE user_email = ? OR user_phone = ? ') ;  
$stmt->execute(array($email , $phone))  ;  
$count = $stmt->rowCount() ; 
if($count > 0){
    printFailure();   
}else{
    $data = array(
        "user_name"=>$username, 
        "user_password"=>$password , 
        "user_email"=>$email , 
        "user_phone"=>$phone , 
        "user_verifycode"=>"0" , 
    ) ; 
    insertData("user",$data) ;  
}


?>