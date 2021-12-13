<?php

	require 'databasebroker.php';
	require 'model/korisnik.php';
    include 'login.php';
	include 'register.php';


	
?>

<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Modna kuca EDI</title>

        <!-- CSS -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="css/form-elements.css">
        <link rel="stylesheet" href="css/style.css">

   

        <!-- Favicon and touch icons -->
        <link rel="shortcut icon" href="assets/ico/favicon.png">
    

    </head>

    <body  >

        <!-- Top content -->
        <div class="top-content">
        	
            <div class="inner-bg">
                <div class="container">
                	
                    <div class="row">
                        <div class="col-sm-8 col-sm-offset-2 text">
                            <h1>Proizvodnja i prodaja odeće <strong>Modna kuća Edi</strong></h1>
                            <div class="description">
                            	<p>
                                Modna kuća EDI bavi se proizvodnjom trikotaže i konfekcije za žene i muškarce. Osnovana je 1993. godine i oslanja se na porodičnu tradiciju u ovom poslu, koja je duga preko pedeset godina. Tokom godina poslovanja, kolekcije brenda EDI su više puta nagrađivane, kompanija je stekla brojne verne potrošače i distributere. EDI kvalitet i dizajn postaju prepoznatljivi, pa i ne čudi što je EDI jedno od vodećih imena u svetu mode na domaćem tržištu.
                            	</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-sm-5"  >
                        	
                        	<div class="form-box" >
	                        	<div class="form-top">
	                        		<div class="form-top-left">
	                        			<h3>Ulogujte se </h3>
	                            		<p>Enter username and password to log in</p>
	                        		</div>
	                        		<div class="form-top-right">
	                        			<i class="fa fa-lock"></i>
	                        		</div>
	                            </div>
	                            <div class="form-bottom">
				                    <form role="form" action="" method="post" class="login-form"  >
				                    	<div class="form-group">
				                    		<label class="sr-only" for="form-username">Korisnicko ime</label>
				                        	<input type="text" name="form-username" placeholder="Korisnicko ime..." class="form-username form-control" id="form-username" required>
				                        </div>
				                        <div class="form-group">
				                        	<label class="sr-only" for="form-password">lozinka</label>
				                        	<input type="password" name="form-password" placeholder="Lozinka..." class="form-password form-control" id="form-password" required>
				                        </div>
				                        <button type="submit" class="btn" name="login">Sign in!</button>
				                    </form>
			                    </div>
		                    </div>
		                
		                	 
	                        
                        </div>
                        
                        <div class="col-sm-1 middle-border"></div>
                        <div class="col-sm-1"></div>
                        	
                        <div class="col-sm-5">
                        	
                        	<div class="form-box">
                        		<div class="form-top">
	                        		<div class="form-top-left">
	                        			<h3>Registrujte se!</h3>
	                            		<p>Fill in the form below to get instant access:</p>
	                        		</div>
	                        		<div class="form-top-right">
	                        			<i class="fa fa-pencil"></i>
	                        		</div>
	                            </div>
	                            <div class="form-bottom">
				                    <form role="form" action="" method="post" class="registration-form">
				                    	<div class="form-group">
				                    		<label class="sr-only" for="form-first-name">First name</label>
				                        	<input type="text" name="form-first-name" placeholder="Ime..." class="form-first-name form-control" id="form-first-name" required>
				                        </div>
				                        <div class="form-group">
				                        	<label class="sr-only" for="form-last-name">Last name</label>
				                        	<input type="text" name="form-last-name" placeholder="Prezime..." class="form-last-name form-control" id="form-last-name" required>
				                        </div>
										<div class="form-group">
				                        	<label class="sr-only" for="form-brojTelefona">Broj telefona</label>
				                        	<input type="text" name="form-brojTelefona" placeholder="Broj telefona..." class="form-email form-control" id="form-brojTelefona"required>
				                        </div>
				                        <div class="form-group">
				                        	<label class="sr-only" for="form-email">Email</label>
				                        	<input type="text" name="form-email" placeholder="Email..." class="form-email form-control" id="form-email"required>
				                        </div>
										<div class="form-group">
				                        	<label class="sr-only" for="form-lozinka">Lozinka</label>
				                        	<input type="password" name="form-lozinka" placeholder="Lozinka..." class="form-email form-control" id="form-lozinka"required>
				                        </div>
                                        
                                     
                                         

				                       
				                        <button type="submit" class="btn" name="register">Sign me up!</button>
				                    </form>
			                    </div>
                        	</div>
                        	
                        </div>
                    </div>
                    
                </div>
            </div>
            
        </div>

    

        <!-- Javascript -->
        <script src="assets/js/jquery-1.11.1.min.js"></script>
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/js/jquery.backstretch.min.js"></script>
        <script src="assets/js/scripts.js"></script>
        
  

    </body>

</html>