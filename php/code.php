


<?php 
session_start();
 ?>



<?php
	
    include_once './connexiondb.php';

    if(isset($_POST["send"])){
        

         $name = $_POST["name"];
         $email = $_POST["email"];
         $subject = $_POST["subject"];
         $message = $_POST["message"];
         $sql = "INSERT INTO contact (Nom,email,subjectt,messagee) VALUES ('$name','$email','$subject','$message')";
          if (mysqli_query($conn, $sql)) {
             header('Location: ./index.php');
             
          } else {
             echo "Error: " . $sql . ":-" . mysqli_error($conn);
          }
     
          mysqli_close($conn);
     }

     if(isset($_POST["créer"])){
        

      $name = $_POST["nom2"];
      $email = $_POST["mail2"];
      $prenom = $_POST["prenom2"];
      $password = $_POST["pass2"];
      $sql = "INSERT INTO users (nom,prenom,email,password) VALUES ('$name','$prenom','$email','$password')";
       if (mysqli_query($conn, $sql)) {
         $_SESSION["prenom"] =$_POST["prenom2"];
         $_SESSION["email"] =$_POST["mail2"];
         $query = "SELECT * FROM users WHERE email='$email'";
         if($result){
  
            while($row = mysqli_fetch_assoc($result)){
              
            }}
          header('Location: ./catalogue.php');
          
       } else {
          echo "Error: " . $sql . ":-" . mysqli_error($conn);
       }
  
       mysqli_close($conn);
  }
     
  if(isset($_POST["connecter"])){
        

   
   $email = $_POST["mail3"];
   
   $password = $_POST["pass3"];
   $query = "SELECT * FROM users WHERE email='$email'";
$result = mysqli_query($conn,$query);
if($result){
  
  while($row = mysqli_fetch_assoc($result)){
    
    
      
          if($password==$row['password']){
              
            
            
            $_SESSION["nom"] =$row['nom'];
            $_SESSION["prenom"] =$row['prenom'];
            $_SESSION["email"] =$row['email'];
            $_SESSION["password"] =$row['password'];
            $_SESSION["id"] =$row['id'];
            header('Location: ./catalogue.php');
            
          }
          
          else{
            setcookie("password","Wrong password! try again..",time()+1);
            
            header('location: ./catalogue.php');
          }
      }}
      else{
        setcookie("username","Wrong username! try again..",time()+1);
        setcookie("block","block",time()+1);
        header('location: ./catalogue.php');
      }
}



if(isset($_POST["ajouter"])){

         $_SESSION["idproduit"]= $_POST["id"];
         $idproduit=$_SESSION["idproduit"];
         $iduser=$_SESSION["id"];
        $sql = "INSERT INTO pannier (iduser,idproduit) VALUES ('$iduser','$idproduit')";
          if (mysqli_query($conn, $sql)) {
             header('Location: ./catalogue.php');
             
          } else {
             echo "Error: " . $sql . ":-" . mysqli_error($conn);
          }
     
          mysqli_close($conn);

}

if(isset($_POST["delete"])){
   
   $id = $_POST["deletevalue"];
   $sql = "DELETE FROM pannier WHERE id='$id'";
   if (mysqli_query($conn, $sql)) {
     
      header('Location: catalogue.php');
      
   } else {
      echo "Error: " . $sql . ":-" . mysqli_error($conn);
   }

   mysqli_close($conn);}

   if(isset($_POST["deconnecter"])){
      session_unset();
      header('Location: ./catalogue.php');
   }
		
?>