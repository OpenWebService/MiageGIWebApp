
<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include 'global/head.php';
include 'global/header.php';


if (isset($_POST["nom"]) and isset($_POST["prenom"]) and isset($_POST["email"]) and isset($_POST["message"])) {
    echo "ok <h1>H1</h1><h1>H1</h1><h1>H1</h1><h1>INSERER MESSAGE DANS LA BDD</h1>";
    
} else {
    /*
     * ------------------------------------------------
     */

    include 'vue/v_contact.php';

/*
 * ------------------------------------------------
 */

include 'vue/v_contact.php';


/*
 * ------------------------------------------------
 */
include 'global/footer.php';
}