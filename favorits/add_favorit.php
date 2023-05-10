<?php 
include '../connect.php' ;  
include '../functions.php' ; 

$userId = filterRequest('id');
$car_Id = filterRequest('car_id'); 


$data = array(
    'user_id' => $userId , 
    'car_id' => $car_Id
) ; 

insertData('favorits' , $data) ;