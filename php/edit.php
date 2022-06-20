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
    <link rel="stylesheet" href="../css/styleee.css">
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
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link active" aria-current="page" href="index.html">Acceuil</a>
        <a class="nav-link" href="#">A propos de nous</a>
        <a class="nav-link" href="#">Contact</a>
        <a class="nav-link" href="#">Collaborateurs</a>
       <div class="dropdown">
  <button class="btn btn-llight dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
  <img src="../images/user.png" alt="" width="30" height="30">
  </button>
  <ul class="dropdown-menu">
  <?php 
  if(empty($_SESSION["email"])){
    echo "<button type='button' class='btn btn-light' data-bs-toggle='modal' data-bs-target='#exampleModal'>
    Se connecter
  </button>
  ";
  }
  else{
  echo "<li><h6 >  Bonjour ".$_SESSION['prenom']." </h6></li>
  <li><a class='dropdown-item' href='#'>Vérifier les commandes</a></li>
  <li data-bs-toggle='modal' data-bs-target='#exampleModal2'><a class='dropdown-item' href='#'>éditer votre compte</a></li>
  <li><hr class='dropdown-divider'></li>
  <li><form  action='./code.php' method='post'><input class='dropdown-item' type='submit' value='Se déconnecter' name='deconnecter'></form></li>
"; }?></ul>

</div>

</button>
<!-- Button pannier -->
<button class="btn btn-light position-relative" type="button" data-bs-toggle="offcanvas" data-bs-target="#demo">
          <img src="../images/pannier.png" alt="" width="30" height="30">
           <?php
include_once 'connexiondb.php';
if(!empty($_SESSION["id"])){
          
         
  $value=$_SESSION["id"];
$i=0;
$query = "SELECT * FROM pannier WHERE iduser='$value'";
$result = mysqli_query($conn,$query);
if($result){
  while($row = mysqli_fetch_assoc($result)){
   $i++;
  
}}
echo "<span class='position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger'>".$i."</span>" ;
}
else { echo "" ;}
?>

        </button>
       
        
      </div>
    </div>
  </div>
</nav>
</header>

<section id="cta" class="cta">
    <div class="container" data-aos="zoom-in">
  
      <div class="row">
        <div class="col-lg-9 text-center text-lg-start">
          <h1 class="h33">Editer votre compte</h1>

         </div>
        
      </div>
  
    </div>
  </section>

<div class="container-fluid">
  <h3>Mot de passe: </h3> <p><a class="btn btn-light" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
    Modifier votre mot de passe
  </a></p>
  <div class="collapse" id="collapseExample">
  <div class="card card-body">
  <form action="./code.php" method="post"  class="php-email-form">
  <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Mot de passe actuel</label>
        <input type="password" class="form-control" id="exampleInputPassword1" name="pass3">
      </div>
      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Nouveau mot de passe</label>
        <input type="password" class="form-control" id="exampleInputPassword1" name="pass3">
      </div>
      
      
      <button type='submit' class='btn btn-primary' name="newpass">Modifier</button>
    
    </form>
  </div>
</div>
<br>
<h3>Votre e-mail: </h3> <p><a class="btn btn-light" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
    
Modifier e-mail
  </a></p>
  <div class="collapse" id="collapseExample">
  <div class="card card-body">
  <form action="./code.php" method="post"  class="php-email-form">
  <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Votre e-mail est</label>
          <input type="email" class="form-control" id="email" aria-describedby="emailHelp" name="mail2" value="<?php $_SESSION["email"] ?>">
          
        </div>
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Introduisez un nouvel e-mail</label>
          <input type="email" class="form-control" id="email" aria-describedby="emailHelp" name="mail2">
          
        </div>
      
      
      <button type='submit' class='btn btn-primary' name="newmail">Modifier</button>
    
    </form>
  </div>
</div>






</div>




  <footer id="footer">
  

  <div class="footer-top">
    <div class="container">
      <div class="row">

        <div class="col-lg-3 col-md-6 footer-contact">
          <h3>Aqua instal equipement</h3>
          <p>
            23 bd Oqba Bnou Nafiaa <br>
            Casablanca, Sabil Hay Mohammadi <br>
            Maroc <br><br>
            <strong>Phone:</strong> 05 22 71 30 40<br>
            <strong>Fax:</strong> 05 22 71 30 44 <br>
            <strong>Email:</strong> aquainstale@hotmail.com<br>
          </p>
        </div>

        <div class="col-lg-3 col-md-6 footer-links">
          <h4>Useful Links</h4>
          <ul>
            <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
          </ul>
        </div>

        <div class="col-lg-4 col-md-6 footer-newsletter">
          <h4>Our Newsletter</h4>
          <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
          <form action="" method="post">
            <input type="email" name="email"><input type="submit" value="Subscribe">
          </form>

        </div>

        <div class="col-lg-3 col-md-6 footer-links">
          <h4>Our Social Networks</h4>
          <p>Cras fermentum odio eu feugiat lide par naso tierra videa magna derita valies</p>
          <div class="social-links mt-3">
            <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
            <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
            <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
            <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
            <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
          </div>
        </div>

      </div>
    </div>
  </div>

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

  
</footer>
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

if($result){
while($row = mysqli_fetch_assoc($result)){
  $total=0;
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
<div class='modal fade   ' id='exampleModal' tabindex='-1' aria-labelledby='exampleModalLabel' aria-hidden='true'>
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

  <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel2" aria-hidden="true">
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