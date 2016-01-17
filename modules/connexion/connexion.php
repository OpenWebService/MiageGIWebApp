<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

if (isset($_POST["login"]) and isset($_POST["pass"])) {    
    
    $query = $bdd->prepare('SELECT * FROM etudiants WHERE email=? AND pass=?');
    $query->execute(array($_POST["login"], $_POST["login"]));
    
    
    header();
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