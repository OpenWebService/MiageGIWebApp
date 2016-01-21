 <?php 

  // Connexion à la base de données

try
{
       $bdd = new PDO('mysql:host=localhost;dbname=ae_miage', 'root', '');
}
catch(Exception $e)
{
       die('Erreur : '.$e->getMessage());
}
 ?>

<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

if (isset($_POST["login"]) and isset($_POST["pass"])) {    
        $login=$_POST["login"];
        
        $pass=$_POST["pass"];
    $query = $bdd->prepare('SELECT * FROM admin WHERE email=? AND pass=?');
    $query->execute(array($login, $pass));
    if($etud=$query->fetch()){
        
        session_start();        
        $_SESSION['id'] = $etud["id"];
        $_SESSION['nom'] = $etud["nom"];
        $_SESSION['pseudo'] = $etud["pseudo"];
        $_SESSION['email'] = $etud["email"];
        
        header('Location: /MiageGIWebApp/');
    }  else {
        echo 'PAS CONNECTE';
    }
    ///header();
} else {


    include 'global/head.php';
    include 'global/header.php';

    /*
     * ------------------------------------------------
     */


    include 'vue/v_connexion.php';

    /*
     * ------------------------------------------------
     */
    include 'global/footer.php';
}