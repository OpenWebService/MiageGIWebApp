<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Coeur
 *
 * @author Neiba Aristide
 */

class Coeur {
    /*
     * Permet de decouper mon url
     * @return un module
     */

    static function parse_url() {

        $array_lien = explode('/', trim($_SERVER['REQUEST_URI'], '/'));

        if (count($array_lien) > 1) {
            return $array_lien[1];
        } else {
            $module = 'accueil';
            return $module;
        }
    }

    /*
     * Permet de decouper mon url
     * @return une action
     */

    static function action_url() {

        $array_lien = explode('/', trim($_SERVER['REQUEST_URI'], '/'));

        if (count($array_lien) > 2) {
            return $array_lien[2];
        } else {
            $action = 'defaut';
            return $action;
        }
    }

    /*
     * Permet de decouper mon url
     * @return un module
     */

    static function parametres_url() {

        $array_lien = explode('/', trim($_SERVER['REQUEST_URI'], '/'));

        $params = array();
        if (count($array_lien) > 3) {
            $i = 1;
            foreach ($array_lien as $value) {
                if ($i != 1 && $i != 2) {
                    $params[] = $value;
                }
                $i++;
            }
        }
        return $params;
    }

    /*
     * @Params le module
     * @return TRUE ou FALSE
     */

    static function module_exist($module) {

        $repertoire = 'modules/' . $module . '/' . $module . '.php';
        if (is_file($repertoire)) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

    /*
     * Verifie si une session existe
     * @Param 
     * @return true ou false
     */

    static function admin_connecter() {

        if (isset($_SESSION['password']) && isset($_SESSION['email'])) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

    /*
     * @Params $email, $password
     * @return user['email', 'password', 'droit', 'id_etb'] ou false
     */

    static function cheick_admin($email, $password) {


        $bdd = Connexion::connexionbdd();

        $requete = $bdd->prepare("SELECT * FROM t_admin WHERE email = ? ") or die(print_r($bdd->errorInfo()));

        $requete->execute(array($email));

        /*
         * Definition de l'erreur
         * 
         * @ code_erreur , message_erreur ,cause_erreur
         */

        $erreur = array();

        /*
         * Si le user existe 
         */
        if ($result = $requete->fetch()) {

            /*
             * Verification de mot de passe
             */
            if ($result['pass'] == $password) {
                return $result;
            } else {
                $erreur['erreur_code'] = ERREUR_PASSWORD;
                $erreur['erreur_message'] = 'Mot de passe invalide.';
                return $erreur;
            }
        }
        $erreur['erreur_code'] = ERREUR_CONNEXION_SERVEUR;
        $erreur['erreur_message'] = 'Ce mail n\'existe pas dans notre base';
        return $erreur;
    }

    /* @Params User[]
     * return true ou false
     */

    static function connecter_admin($admin) {


        $_SESSION['id'] = $admin['id'];
        $_SESSION['nom'] = $admin['nom'];
        $_SESSION['prenoms'] = $admin['prenoms'];
        $_SESSION['email'] = $admin['email'];
        $_SESSION['password'] = $admin['pass'];
    }

    /*
     * Reccuperer le user connecter
     * 
     * @return admin[]
     */

    static function extract_admin() {
        $admin = new administrateur();

        $admin->setNom($_SESSION['nom']);
        $admin->setPrenoms($_SESSION['prenoms']);
        $admin->setEmail($_SESSION['email']);
        $admin->setPassword($_SESSION['password']);

        return $admin;
    }

    /*
     * Deconnexion de l'administrateur connecter 
     * 
     * Suppression des sessions
     * @return true
     */

    static function deconnexion_admin() {

        unset($_SESSION['nom']);
        unset($_SESSION['prenoms']);
        unset($_SESSION['email']);
        unset($_SESSION['password']);
        unset($_SESSION['privilege']);
        return TRUE;
    }

}
