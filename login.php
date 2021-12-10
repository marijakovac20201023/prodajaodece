<?php

	require 'databasebroker.php';
	require 'model/korisnik.php';


	session_start();
	if(isset($_POST["login"])){  //ako je korisnik kliknuo dugme sa name-om login
        
		$email = $_POST["form-username"];
		$lozinka = $_POST["form-password"];
		$k = new Korisnik(null,null,null,$email,null,$lozinka);
		$result=Korisnik::ulogujSe($k,$conn);
        
	//	 $_SESSION["currentUser"] = $id;
		 
		if(mysqli_num_rows($result) > 0){
			
			$row = mysqli_fetch_assoc($result);  
			header('Location: pocetna.php');
		}else{
			echo '<script>alert("Wrong credentials")</script>';
		}
	}

?>