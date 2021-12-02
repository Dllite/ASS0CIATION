<?php 

    require_once 'includes/db.php';

    require_once 'includes/function.php';
    $errors=[];
    if(isset($_POST['submit'])){
        echo $nom=strtoupper(sanitaze($_POST["nom"]));
        echo $prenom=ucwords(sanitaze($_POST["prenom"]));
        $date_nais=sanitaze($_POST["date_nais"]);
        $numtel=sanitaze($_POST["numtel"]);
        $profession=sanitaze($_POST["profession"]);
        $email=sanitaze($_POST["email"]);

        $password=substr($nom, -3).rand(001,1000);

        $errors=[];
        
        if(empty($nom)){
            $errors="Champ obligatoire";
        }
        if(empty($prenom)){
            $errors="Champ obligatoire";
        }

        if(empty($errors)){
        
            $statement = $db->query("INSERT INTO membre VALUES (NULL, '$nom', '$prenom', '$date_nais', '$profession','$email', '$password')") ;
            if ($statement==1){
                echo "Reussi";
            }else{
                echo "echec de lors de l'enregistrement";
            }
    
            

        }
    }

    require_once 'head.php';

    require_once 'header.php';
    
    require_once 'views/add_member_views.php';

    require_once 'footer.php';