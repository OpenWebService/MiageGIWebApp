<?php

include 'coeur/init.php';

/*
 * Parseur d'url dans barre
 */

$module = Coeur::parse_url();
if ($module=='index.php'){
    $module='accueil';
}



/*
 * Verification de l'existance d'une session de connexion
 * 
 */

/*
 * Verification de l'existance du module
 */
if (coeur::module_exist($module)) {
    /*
     * 
     * Redirection vers le module
     * 
     */
    include 'modules/' . $module . '/' . $module . '.php';
} else {

    /*
     */
    include 'modules/erreur/erreur.php';
}
 