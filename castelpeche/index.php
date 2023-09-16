<?php
    define("RACINE", str_replace("index.php", "", $_SERVER["SCRIPT_FILENAME"]));
    define("CONTROLLEUR_DIR", RACINE."controller/");

    $parametres = explode("/", $_GET["param"]);

    if($parametres[0] !== "") {
        $controller = ucfirst($parametres[0]);
        $action = isset($parametres[1]) ? $parametres[1] : 'index';
        $args = isset($parametres[2]) ? $parametres[2] : null;

        require_once(CONTROLLEUR_DIR.$controller.'.php');
        if($args) {
            $action($args);
        } else {
            $action();
        }
        
    } else {
        require_once(CONTROLLEUR_DIR.'Accueil.php');
        index();
    }