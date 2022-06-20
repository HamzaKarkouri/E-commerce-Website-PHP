<?php 
session_start();

include_once 'connexiondb.php';
if(!empty($_SESSION["email"])){
          
         
  $value=$_SESSION["email"];

$query = "SELECT id FROM users WHERE email='$value'";
$result = mysqli_query($conn,$query);
if($result){
  while($row = mysqli_fetch_assoc($result)){
    $_SESSION["id"]=$row["id"];
  
}}
}
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/stylee.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../js/vuejs.js"></script>
   
   
    <link rel="icon" type="image/png" href="../images/logoicon.png" />
    <title>AQUA INSTAL EQUIPEMENT</title>
</head>
<body>
   
<header id="header" class="fixed-top ">
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
  <a class="navbar-brand" href="index.php">
      <img src="../images/logo2.png" alt="" width="230" height="60">
    </a>
   
      
    
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link" aria-current="page" href="index.html">Acceuil</a>
        <a class="nav-link" href="realisation.html">Nos réalisations</a>
        <a class="nav-link" href="index.php">Contact</a>
        <a class="nav-link active" href="catalogue.php">Catalogue</a>
      



       
        
      </div>
    </div>
  </div>






</nav>




</header>

<section id="cta" class="cta">
    <div class="container" data-aos="zoom-in">
  
      <div class="row">
        <div class="col-lg-9 text-center text-lg-start">
          <h1 class="h33">Notre Catalogue</h1>
         </div>
        
      </div>
  
    </div>
  </section>


  <section id="portfolio" class="portfolio">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>Catalogue</h2>
        <p>
Notre préoccupation est de vous satisfaire en vous apportant le meilleur de nos produits avec un meilleur rapport qualité/prix.</p>
      
      <ul id="portfolio-flters" class=" justify-content-center" data-aos="fade-up" data-aos-delay="100">
        <li data-filter="*" id="all1" class="filter-active"  onclick="all1()">Matériel assainissement</li>
        <li data-filter=".filter-app" id="all2" onclick="all2()">Equipement sanitaire</li>
        <li data-filter=".filter-card"  id="all3" onclick="all3()">Matériel électromécanique</li>
        <li data-filter=".filter-web"  id="all4" onclick="all4()">Matériel industriel</li>
      </ul>
      
</div>
<div id="all">
<div class="all">
  <?php
include_once 'connexiondb.php';

$query = "SELECT * FROM produits WHERE type='all'";
$result = mysqli_query($conn,$query);
if($result){
  while($row = mysqli_fetch_assoc($result)){
   echo "
      <div class='card mb-3' style='max-width: 540px;' >
        <div class='row g-0'>
          <div class='col-md-4'>
            <img src='../images/".$row['image']."' class='img-fluid rounded-start' >
          </div>
          <div class='col-md-8'>
            <div class='card-body'>
              <h5 class='card-title'>".$row['nom']."</h5>
              <p class='card-text'>".$row['description']."</p>";
              
            echo "</div>
          </div>
        </div>
      </div>
      ";
    }
  }
  
  ?>
      </div>
</div>
<div id="app">
      <div class="app">
      <?php
include_once 'connexiondb.php';

$query = "SELECT * FROM produits WHERE type='app'";
$result = mysqli_query($conn,$query);
if($result){
  while($row = mysqli_fetch_assoc($result)){
   echo "
      <div class='card mb-3' style='max-width: 540px;' >
        <div class='row g-0'>
          <div class='col-md-4'>
            <img src='../images/".$row['image']."' class='img-fluid rounded-start' >
          </div>
          <div class='col-md-8'>
            <div class='card-body'>
              <h5 class='card-title'>".$row['nom']."</h5>
              <p class='card-text'>".$row['description']."</p>";
             
            echo "</div>
          </div>
        </div>
      </div>
      ";
    }
  }
  
  ?>
      </div>
</div>

<div id="cardd">
  <div class="cardd">
  <?php
include_once 'connexiondb.php';

$query = "SELECT * FROM produits WHERE type='card'";
$result = mysqli_query($conn,$query);
if($result){
  while($row = mysqli_fetch_assoc($result)){
   echo "
      <div class='card mb-3' style='max-width: 540px;' >
        <div class='row g-0'>
          <div class='col-md-4'>
            <img src='../images/".$row['image']."' class='img-fluid rounded-start' >
          </div>
          <div class='col-md-8'>
            <div class='card-body'>
              <h5 class='card-title'>".$row['nom']."</h5>
              <p class='card-text'>".$row['description']."</p>";
             
            echo "</div>
          </div>
        </div>
      </div>
      ";
    }
  }
  
  ?>
      </div>
</div>


<div id="web">
  <div class="web">
  <?php
include_once 'connexiondb.php';

$query = "SELECT * FROM produits WHERE type='web'";
$result = mysqli_query($conn,$query);
if($result){
  while($row = mysqli_fetch_assoc($result)){
   echo "
      <div class='card mb-3' style='max-width: 540px;' >
        <div class='row g-0'>
          <div class='col-md-4'>
            <img src='../images/".$row['image']."' class='img-fluid rounded-start' >
          </div>
          <div class='col-md-8'>
            <div class='card-body'>
              <h5 class='card-title'>".$row['nom']."</h5>
              <p class='card-text'>".$row['description']."</p>";
              
            echo "</div>
          </div>
        </div>
      </div>
      ";
    }
  }
  
  ?>
      </div>
</div>




    </div>
  </section>


  
  
  
  
  <footer id="footer">
  <div class="container footer-bottom clearfix">
    <div class="copyright">
      &copy; Copyright <strong><span>Aqua instal equipement</span></strong>. All Rights Reserved
    </div>
    <div class="credits">
      <!-- All the links in the footer should remain intact. -->
      <!-- You can delete the links only if you purchased the pro version. -->
      <!-- Licensing information: https://bootstrapmade.com/license/ -->
      <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/arsha-free-bootstrap-html-template-corporate/ -->
      Designed by <a href="https://bootstrapmade.com/">Hamza Karkouri</a>
    </div>
  </div>
  
    
  </footer><img src="../images/tope3.png" onclick="topFunction()" id="myBtn" title="Go to top" width="54px" height="54px">
  <div class="offcanvas offcanvas-end" id="demo" >
    <div class="pannel" >
    <div class="offcanvas-header">
      <h1 class="offcanvas-title">Mon panier</h1>
      <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"></button>
    </div>
    <div class="offcanvas-body">

      <div class='produit'>
    <?php
    if(!empty($_SESSION["email"])){
include_once 'connexiondb.php';
$value=$_SESSION["id"];
$query = "SELECT * FROM pannier WHERE iduser='$value'";
$result = mysqli_query($conn,$query);
$total=0;
if($result){
  while($row = mysqli_fetch_assoc($result)){
    
    $idproduit=$row['idproduit'];
    $queryy = "SELECT * FROM produits WHERE id='$idproduit'";
$resultt = mysqli_query($conn,$queryy);
if($resultt){
  while($roww = mysqli_fetch_assoc($resultt)){
    $total+=$roww["prix"];
   echo "
      <div class='card ' style='max-width: 540px;' id='cardpannel'>
        <div class='row g-0'>
          <div class='col-md-4'>
            <img src='../images/".$roww['image']."' class='img-fluid rounded-start' >
          </div>
          <div class='col-md-8'>
            <div class='card-body'>
              
              <h5 class='card-title'>".$roww['nom']."</h5>
             
              <p class='card-text'>".$roww['prix']." DH</p>
              <form action='./code.php' method='post' id='formdelete'>
              <input type='text' value='".$row['id']."' class='deletevalue' name='deletevalue'>
              <button class='btn btn-light' type='submit' name='delete' id='btndelete'>
              <img class='delete' src='../images/delete.png'  width='30' height='30'>
              </button></form>
              <div id='numbers' class='border border-2 rounded' ><div class='moins'><h3>-</h3></div><h3>1</h3><div class='plus'><h3>+</h3></div></div>
          
              
            </div>
          </div>
        </div>
      </div>
      ";}}
    }
  }
  
  
  echo "</div>
      <div class='total'>
        <div class='tot'><h2>Total</h2><h2 class='prix'>".$total." DH</h2></div>
        <button id='pass' type='button' class='btn btn-success'>Passer la commande</button>
      </div>";
}
else {
  echo "<button type='button' class='btn btn-light' data-bs-toggle='modal' data-bs-target='#exampleModal'>
    <h1>Veuillez se connecter pour continuer</h1>
  </button>";
}

?>
    </div>
  </div>
  
</div>















  </div>
</div>
</div>
<div class='modal fade' id='exampleModal' tabindex='-1' aria-labelledby='exampleModalLabel' aria-hidden='true'>
  <div class='modal-dialog'>
    <div class='modal-content'>
      <div id="register">
      <div class='modal-header'>
        <h5 class='modal-title' id='exampleModalLabel'>Accéder pour continuer</h5>
        <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
      </div>
      <div class='modal-body'>
      <form action="./code.php" method="post"  class="php-email-form">
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Email</label>
          <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="mail3">
          
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Mot de passe</label>
          <input type="password" class="form-control" id="exampleInputPassword1" name="pass3">
        </div>
        <div class="mb-3 form-check">
          
          <p id="inscris" onclick='création()'>Tu n'as pas de compte ? Inscris-toi</p>
        </div>
        <div class='modal-footer'>
        <button type='button' class='btn btn-secondary' data-bs-dismiss='modal'>Close</button>
        <button type='submit' class='btn btn-primary' name="connecter">Se connecter</button>
      </div>
      </form>
      

    </div>
    </div>

    <div id="créer">
      <div class='modal-header'>
        <h5 class='modal-title' id='exampleModalLabel'>Créer un compte</h5>
        <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
      </div>
      <div class='modal-body'>
      <form action="./code.php" method="post"  class="php-email-form">
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Nom</label>
            <input type="text" class="form-control" id="nom" aria-describedby="emailHelp" name="nom2">
            
          </div>
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Prénom</label>
            <input type="text" class="form-control" id="prenom" aria-describedby="emailHelp" name="prenom2">
            
          </div>
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" aria-describedby="emailHelp" name="mail2">
            
          </div>
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Mot de passe</label>
            <input type="password" class="form-control" id="password" name="pass2">
          </div>
          <div class="mb-3 form-check">
          
          <p id="inscris" onclick='créationn()'>Vous avez déjà un compte ? Se connecter</p>
        </div>
        <div class='modal-footer'>
        <button type='button' class='btn btn-secondary' data-bs-dismiss='modal'>Close</button>
        <button type='submit' class='btn btn-primary' name="créer">Créer</button>
      </div>
      </form>
      

    </div>
    </div>

    <div class="modal fade" id="exampleModal3" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Editer votre compte</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>




<script src="../js/index.js"></script>
</body>
</html>