<?php
        include "../connect.php" ;  
        //
        $firstName = filterRequest("firstName") ;  
        $lastName = filterRequest("lastName") ;  
        $email = filterRequest("email") ;  
        $password = sha1("password") ;   
        $confirm_password = sha1("confirm_password") ;   
        // $verifycode =  "0" ;  
        //check if the user with this informations is present in the data base 
        $stmt = $con->prepare('SELECT * FROM users WHERE email = ? ') ;  
        $stmt->execute(array($email));  
        $count = $stmt->rowCount() ;  
        if($count > 0){
            printFailure();    
//=======================================================
        }else{
            $data = array( 
                "firstName"=>$firstName, 
                "lastName"=>$lastName , 
                "email"=>$email , 
                "password"=>$password ,        
                "confirm_password"=>$confirm_password ,                   
            ) ; 
            insertData("users",$data) ;  
        }
        

?>