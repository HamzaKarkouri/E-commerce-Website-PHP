

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/stylee.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../js/vuejs.js"></script>
   
   
    <link rel="icon" type="image/png" href="./images/logoicon.png" />
    <title>AQUA INSTAL EQUIPEMENT</title>
</head>
<body>
   
<header id="header" class="fixed-top ">
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
  <a class="navbar-brand" href="index.php">
      <img src="./images/logo2.png" alt="" width="230" height="60">
    </a>
   
      
    
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link" aria-current="page" href="index.php">Acceuil</a>
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
            <img src='./images/".$row['image']."' class='img-fluid rounded-start' >
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
            <img src='./images/".$row['image']."' class='img-fluid rounded-start' >
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
            <img src='./images/".$row['image']."' class='img-fluid rounded-start' >
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
            <img src='./images/".$row['image']."' class='img-fluid rounded-start' >
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
      Designed by <a href="https://bootstrapmade.com/">Hamza Karkouri</a>
    </div>
  </div>
  
    
  </footer><img src="../images/tope3.png" onclick="topFunction()" id="myBtn" title="Go to top" width="54px" height="54px">
  


<script src="./js/index.js"></script>
</body>
</html>