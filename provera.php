<?php

    include "databasebroker.php";
    include "model/korisnik.php";
    if (!isset ($_GET["form-email"])){
         echo "Parametar email nije prosleđen!";
    } else {
        $email=$_GET["form-email"];


   
    $rezultat = Korisnik::proveriEmail($email,$conn);
    if ($rezultat->num_rows!=0){
        echo "0";
    } else {
        echo "1";
    }
     
    }
?>
