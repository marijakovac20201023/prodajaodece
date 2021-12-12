<?php
class Velicina{
    private $id;
    private $oznaka;

    public static function vratiSveVelicine($conn){
        $upit = "SELECT * from velicina";


        return $conn->query($upit);

    }
}
   



?>