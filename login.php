<?php

    require_once 'head.php';

    session_start();

      if(isset($_POST['submit'])){
        if(empty($_POST['email'])){
          $errors="Votre adresse email est obligatoire";
        }
        if(empty($_POST['password'])){
          $errores = "Le mot de passe est obligatoire";
        }
        if(empty($errors)){
          $statement = $db->query("SELECT * FROM membre WHERE email='$email'&& password='$password'");
          $ligne=mysqli_num_rows($statement);
          if($ligne==1){
            header('location:index.php');
          }
        }else{
          $errors="L'adresse email ou le mot de passe est invalide";
        }
        
    }


    require_once 'views/login_view.php';
?>

