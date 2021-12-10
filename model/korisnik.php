<?php

class Korisnik{
    private $id;
    private $ime;
    private $prezime;

    private $email;
    private $brojTelefona;
    private $lozinka;
 


    public function __construct($id=null,$ime=null,$prezime=null, $email=null, $brojTelefona=null,$lozinka=null  )
    {
        $this->id=$id;
        $this->ime=$ime;
        $this->prezime=$prezime;

        $this->email=$email;
        $this->brojTelefona=$brojTelefona;
        $this->lozinka=$lozinka;


    }

    
    public static function ulogujse($korisnik,$conn){
        $query = "select * from korisnik where email='$korisnik->email' and lozinka='$korisnik->lozinka'";

        return $conn->query($query);

    }

    public static function registrujse($korisnik,$conn){
        $query = "insert into korisnik(ime,prezime,email,brojTelefona,lozinka) values('$korisnik->ime','$korisnik->prezime','$korisnik->email','$korisnik->brojTelefona','$korisnik->lozinka') ";
    
        return $conn->query($query);

    }

    public static function getIdByEmail($user,$conn){
        $query = "  select * from user where email='$user->email' ";
        $myArray = array();
        $result= $conn->query($query);
        if($result){
            while($row = $result->fetch_array()){

                $myArray[] = $row;
            }
        }
 
        return $myArray[0]["id"];

    }


    
    public static function getUserById($id,$conn){
        $query = "select * from user where id=$id";
        $myArray = array();
        $result= $conn->query($query);
        if($result){
            while($row = $result->fetch_array()){

                $myArray[] = $row;
            }
        }
        return  $myArray[0]["firstname"]  . " " . $myArray[0]["lastname"] ;

    }


}


?>