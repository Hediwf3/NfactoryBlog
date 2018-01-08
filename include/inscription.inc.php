<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blog</title>
<link rel="stylesheet" href="./assets/css/screen.css">

</head>
<body>
  

<h1>INSCRIPTION</h1>

<?php 

if(isset($_POST['formulaire'])){

  echo("Je viens du formulaire");

  $tabErreur = array();

  $prenom = $_POST['penom'];
  $mail = $_POST['mail'];
  $mdp = $_POST['mdp'];

  if($_POST["prenom"] == ""){

    array_push($tabErreur, "Veuillez saisir votre nom");
  }
  if($_POST["mail"] == ""){
    
        array_push($tabErreur, "Veuillez saisir votre mail");
      }
      if($_POST["mdp"] == ""){
        
            array_push($tabErreur, "Veuillez saisir votre mdp");
          }
       
      if (count($tabErreur) != 0){

          $message = "<ul>";

          for( $i = 0; $i < count($tabErreur); $i++) {

            $message .= "<li>" . $tabErreur[$i] . "</li>";


          }

          $message .= "</ul>";

          echo($message);

          

      }
      else {
        $connexion = mysqli_connect("localhost", "root", "", "blog");
        $requete = "INSER INTO t_users (NULL, $prenom,) "  
      }

      

}
else { 

  echo("je viens d'ailleurs");
}

include("./include/forminscription.php");

?>

</body>
</html>