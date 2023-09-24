<?php
    define("RACINE", str_replace("index.php", "", $_SERVER["SCRIPT_FILENAME"])); // On défini une constante (RACINE) qui contient le chemin complet vers la racine du site
    define("CONTROLLEUR_DIR", RACINE."controller/"); // On creer une autre constante (CONTROLLER_DIR) qui ajoute à la racine controller/

    $parametres = explode("/", $_GET["param"]); // On creer un tableau en découpant l'URL avec des "/"

    if($parametres[0] !== "") { // On vérifie que la premiére valeur de mon tableau paramétre n'est pas vide
        $controller = ucfirst($parametres[0]); // On assigne à ma premiére valeur le nom du controller
        $fonction = isset($parametres[1]) ? $parametres[1] : 'index'; // On vérifie que ma variable est déclaré et que elle n'est pas null
        $args = isset($parametres[2]) ? $parametres[2] : null;

        require_once(CONTROLLEUR_DIR.$controller.'.php');
        if($args) {
            $fonction($args);
        } else {
            $fonction();
        }
        
    } else {
        require_once(CONTROLLEUR_DIR.'Accueil.php');
        index();
    }