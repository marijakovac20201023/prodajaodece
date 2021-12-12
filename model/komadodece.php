<?php

class KomadOdece{

    private $id;
    private $naziv;
    private $opis; 
    private $velicina;
    private $cena;
    private $slika;

    public function __construct($id=null, $naziv=null, $opis=null,   $velicina=null,$cena=null,$slika=null)
    {
        $this->id=$id;
        $this->naziv=$naziv;
        $this->opis=$opis; 
        $this->velicina=$velicina;
        $this->cena=$cena;
        $this->slika=$slika;

    }


    public static function dodajOdecu($odeca, $conn){
        $upit = "insert into komadodece (naziv,opis,velicina,cena,slika) values ('$odeca->naziv','$odeca->opis','$odeca->velicina',$odeca->cena,'$odeca->slika')";
        echo $upit;
        return $conn->query($upit);




    }





}


?>