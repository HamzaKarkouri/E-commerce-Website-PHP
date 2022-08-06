

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  
   
   
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
        <a class="nav-link" aria-current="page" href="index.html">Acceuil</a>
        <a class="nav-link" href="realisation.html">Nos réalisations</a>
        <a class="nav-link active" href="index.html">Contact</a>
        <a class="nav-link" href="catalogue.html">Catalogue</a>
      



       
        
      </div>
    </div>
  </div>






</nav>




</header>

<section id="cta" class="cta">
    <div class="container" data-aos="zoom-in">
  
      <div class="row">
        <div class="col-lg-9 text-center text-lg-start">
          <h1 class="h33">Contact</h1>
         </div>
        
      </div>
  
    </div>
  </section>


  <section id="contact" class="contact">
  <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>Vos avis nous intérésse</h2>
       
      </div>

      <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
        <form action="./code.php" method="post"  class="php-email-form">
          <div class="row">
            <div class="form-group col-md-6">
              <label for="name">Votre nom</label>
              <input type="text" name="name" class="form-control" id="name" required>
            </div>
            <div class="form-group col-md-6">
              <label for="name">Votre Email</label>
              <input type="email" class="form-control" name="email" id="email" required>
            </div>
          </div>
          <div class="form-group">
            <label for="name">Sujet</label>
            <input type="text" class="form-control" name="subject" id="subject" required>
          </div>
          <div class="form-group">
            <label for="name">Message</label>
            <textarea class="form-control" name="message" rows="10" required></textarea>
          </div>
          <div class="my-3">
            <div class="loading">Loading</div>
            <div class="error-message"></div>
            <div class="sent-message">Your message has been sent. Thank you!</div>
          </div>
          <div class="text-center"><input type="submit" class="btn btn-default" name="send"></div>
        </form>
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
  
    
  </footer><img src="./images/tope3.png" onclick="topFunction()" id="myBtn" title="Go to top" width="54px" height="54px">
  



<script src="./js/index.js"></script>
</body>
</html>