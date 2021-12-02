<?php
    $host="localhost";
    $base="assocuikiation";
    $user="root";
    $pass="";
    // try {
    //     $db = new PDO('mysql:host=localhost;dbname=association', $user, $pass);
    // } catch (PDOException $e) {
    //     print "Error!: " . $e->getMessage() . "<br/>";
    //     die();
    // }
    $db=mysqli_connect('localhost', 'root', '', 'association') or die("Erreur de connexion a la base de donnée");
?>