<?php

class Korisnik{
    private $id;
    private $imePrezime;
    private $korisnickoIme;
    private $brojTelefona;
    private $lozinka;
 


    public function __construct($id=null,$imePrezime=null, $korisnickoIme=null, $brojTelefona=null,$lozinka=null  )
    {
        $this->id=$id;
        $this->imePrezime=$imePrezime;
        $this->korisnickoIme=$korisnickoIme;
        $this->brojTelefona=$brojTelefona;
        $this->lozinka=$lozinka;


    }




}


?>