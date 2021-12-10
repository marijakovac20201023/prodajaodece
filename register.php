<?php

 

 
	if(isset($_POST["register"])){ 
		  
		$k = new Korisnik(null,$_POST['form-first-name'],$_POST['form-last-name'],$_POST['form-first-name'],$_POST['form-email'],$_POST['form-brojTelefona'],$_POST['form-lozinka']);
		 
		$result=Korisnik::registrujse($k,$conn);
		if ($result){
			echo '<script>alert("Uspesno")</script>';
			 
			 header('Location: pocetna.php'); //ako se korisnik uspesno registrovao smatracemo da je odmah i  ulogovan
			 
		}else{
			echo '<script>alert("Neuspesna registracija")</script>';
		}
	}


?>

