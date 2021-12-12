<?php
    include 'login.php';
    include 'register.php';
    include 'model/velicina.php';
    include 'model/komadodece.php';
    include 'databasebroker.php';


    $velicine = Velicina::vratiSveVelicine($conn);

    $svaOdeca = KomadOdece::vratiSvuOdecu($conn);

  //  $ulogovaniKorisnik = Korisnik::getUserById( $_SESSION["currentUser"],$conn);
 
   // if(isset($_SESSION["currentUser"]))
    //    echo  $_SESSION["currentUser"];
    //else
      //  echo "GRESKA";

 


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
  
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
    integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
</head>
<body>
    <div class="container" style="padding:10px">
        <div class="alert alert alert-primary" role="alert">
            <h4 class="text-primary text-center"> Ovde cemo ispisati ulogovanog korisnika</h4>
        </div>
    </div>
         



    <div class="container">

            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addNewModal" >Dodaj novi komad odece</button>
                <br><br><br>
            <table class="table">
                <thead>
                    <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Naziv</th>
                    <th scope="col">Opis</th>
                    <th scope="col">Velicina</th>
                    <th scope="col">Cena</th>
                    <th scope="col">Slika</th>
                    <th scope="col"> Options </th>


                    </tr>
                </thead>
                <tbody>
                  <?php  while($red = $svaOdeca->fetch_array()):    ?>
                    <tr>
                    <th  >   <?php   echo $red['id'];        ?>     </th>
                    <td><?php   echo $red['naziv'];        ?> </td>
                    <td> <?php   echo $red['opis'];        ?> </td>
                    <td> <?php       echo  Velicina::vratiNazivVelicine($red['velicina'],$conn);        ?> </td>
                    <td> <?php   echo $red['cena'];        ?> </td>
                    <td> <img src="images/<?php   echo $red['slika'];        ?>" alt="$red['slika']"   style="width: 120px;height: auto;"> </td>
                    <td> 
                    <form  method="post">
                                                <button type="button" class="btn btn-success"    data-toggle="modal" data-target="#updateModal"  >  <i class="fas fa-pencil-alt"></i> </button> 
                                                <button type="button" class="btn btn-danger"   ><i class="fas fa-trash"></i></button>  
                                                <button type="button" class="btn btn-warning"   data-toggle="modal" data-target="#viewModal"  ><i class="far fa-id-card"></i></button>   </td>
                                                </form>
                                            </tr>

                    </td>
                    </tr>
                  <?php endwhile;?>
                </tbody>
        </table>

    </div>





<!-- add form modal -->
<div class="modal fade" id="addNewModal" tabindex="-1" role="dialog" aria-labelledby="userModalLabel"
  aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"> Dodaj novi komad odece</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form id="addform" name="addform" method="POST" enctype="multipart/form-data">
        <div class="modal-body">
          <div class="form-group">
            <label for="naziv" class="col-form-label">Naziv</label>
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1"><i class="fas fa-tshirt"></i> 
              </div>
              <input type="text" class="form-control" id="naziv" name="naziv" required="required">
            </div>
          </div>
          <div class="form-group">
            <label for="opis" class="col-form-label">Opis</label>
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1"><i class="fa fa-pencil"   aria-hidden="true"></i></span>
              </div>
              <input type="text" class="form-control" id="opis" name="opis" required="required">
            </div>
          </div>
          
          <div class="form-group">
            <label for="velicina" class="col-form-label">Velicina</label>
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1"><i class="fas fa-ruler"></i></i></span>
              </div>
              <select name="velicina" id="velicina">
                                      <?php
                                        
                                        while($red =   $velicine->fetch_array()):
                                          $oznaka=$red["oznaka"];
                                    
                                      ?>
                                        <option value=<?php echo $red["id"]?>><?php echo $red["oznaka"]?></option>


                                        <?php   endwhile;   ?>
                                      </select>
            </div>
          </div>
          

          <div class="form-group">
            <label for="cena" class="col-form-label">Cena</label>
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1"><i class="fa fa-tag"   aria-hidden="true"></i></span>
              </div>
              <input type="text" class="form-control" id="cena" name="cena" required="required">
            </div>
          </div>

          <div class="form-group">
            <label for="uploadfile" class="col-form-label">Slika</label>
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1"><i class="fa fa-tag"   aria-hidden="true"></i></span>
              </div>
              <input type="file" class="form-control" id="uploadfile" name="uploadfile" required="required">
            </div>
          </div>


 

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-success" id="addButton" >Submit</button> 
        </div>
      </form>
    </div>
  </div>
</div>
<!-- add form modal end -->
 
        
        





        
        <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

        <script src="js/main.js"></script>


      </body>
</html>