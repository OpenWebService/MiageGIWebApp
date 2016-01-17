<?php



$array_file_name = array("l1", "l2","l3","m1m","m1gi","m2m","m2gi");


    function EnvoiFichier($monfichier) {
            // Testons si le fichier a bien été envoyé et s'il n'y a pas d'erreur
        if (isset($_FILES[$monfichier]) AND $_FILES[$monfichier]['error']== 0)
        {
        // Testons si le fichier n'est pas trop gros
            if ($_FILES[$monfichier]['size'] <= 3000000)
            {
                // Testons si l'extension est autorisée
                $infosfichier = pathinfo($_FILES[$monfichier]['name']);
                $extension_upload = $infosfichier['extension'];
                $extensions_autorisees = array('jpg', 'jpeg', 'gif','png');
                if (in_array($extension_upload, $extensions_autorisees))
                {
                    // On peut valider le fichier et le stocker définitivement
                    move_uploaded_file($_FILES[$monfichier]['tmp_name'], 'uploads/' .basename($_FILES[$monfichier]['name']));
                    echo "L'envoi a bien été effectué !";
                }  else { echo 'Erreur : Extension non autorisée choisir un "png", "jpg" ou "jpeg"';}
            }  else {echo "Erreur : Fichier trop volimineux"; }
        }  else {    echo 'Erreur de chargement de fichier'; }
}



for($i=0; $i<sizeof($array_file_name);$i++){
    if(isset($_FILES[$array_file_name[$i]])){
        EnvoiFichier($array_file_name[$i]);
    }
}


?>
<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */











    include 'global/head.php';
    include 'global/header.php';

    /*
     * ------------------------------------------------
     */


    include 'vue/v_emplois.php';

    /*
     * ------------------------------------------------
     */
    include 'global/footer.php';
