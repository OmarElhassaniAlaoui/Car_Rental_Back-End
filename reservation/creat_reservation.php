<?php 
include '../connect.php'  ;   
// request data from the form... 👇
$date_debut = filterRequest('date_debut') ;
$date_fin = filterRequest('date_fin') ;
$ville_dep = filterRequest('ville_dep') ; 
$date_reservation = filterRequest('date_reservation') ;
$prix = filterRequest('prix') ;
//================================================
$data = array( 
    'date_deb'=>$date_debut , 
    'date_fin'=>$date_fin ,
    'ville_depart'=>$ville_dep ,
    'date_reservation'=>$date_reservation ,
    'prix_total'=>$prix ,
) ;  
// insert data into database ... 👇
insertData("reservation", $data) ; 


?>