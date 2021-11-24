<?php 

    require_once 'includes/db.php';

    require_once 'includes/function.php';
    $errors=[];
    if(isset($_POST['submit'])){
        echo $nom=sanitaze($_POST["nom"]);
        echo $prenom=sanitaze($_POST["prenom"]);
        echo $date_nais=sanitaze($_POST["date_nais"]);
        echo $numtel=sanitaze($_POST["numtel"]);
        echo $profession=sanitaze($_POST["profession"]);
        echo $email=sanitaze($_POST["email"]);
        
        if(empty($nom)){
            $errors="Champ obligatoire";
        }
        if(empty($prenom)){
            $errors="Champ obligatoire";
        }

        if($errors){
        
            $statement = $db->prepare("INSERT INTO membre VALUES (NULL, '$nom', '$prenom', '$date_nais', '$profession')");
    
            $statement->execute();

        }
    }

    require_once 'head.php';

    require_once 'header.php';
    
    require_once 'views/add_member_views.php';

    require_once 'footer.php';