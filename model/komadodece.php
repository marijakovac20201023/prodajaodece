<?php

class KomadOdece{

    private $id;
    private $naziv;
    private $opis;
    private $slika;
    private $velicina;

    public function __construct($id=null, $naziv=null, $opis=null, $slika=null, $velicina=null)
    {
        $this->id=$id;
        $this->naziv=$naziv;
        $this->opis=$opis;
        $this->slika=$slika;
        $this->velicina=$velicina;

    }


}


?>