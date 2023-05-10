<?php 
include 'connect.php' ;  
$image = filterRequest('image') ; 
$imageupload=imageUpload($image);  
insertData('car' , array('photo1' => $imageupload)) ;  