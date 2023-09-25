<?php
    define("RACINE", str_replace("index.php", "", $_SERVER["SCRIPT_FILENAME"])); // On défini une constante (RACINE) qui contient le chemin complet vers la racine du site
    define("CONTROLLEUR_DIR", RACINE."controller/"); // On creer une autre constante (CONTROLLER_DIR) qui ajoute à la racine controller/

    $parametres = explode("/", $_GET["param"]); // On creer un tableau en découpant l'URL avec des "/"

    if($parametres[0] !== "") { // On vérifie que la premiére valeur de mon tableau paramétre n'est pas vide
        $controller = ucfirst($parametres[0]); // On assigne à ma première valeur le nom du controller
        
        // On considère que mon deuxieme parametre sera la fonction a appeler dans le controller récupéré précedemment.
        // On vérifie que ma variable est déclaré et que elle n'est pas null, si elle n'est pas null, alors elle vaut son contenu, sinon elle vaut 'index'
        if(isset($parametres[1])) {
            $fonction = $parametres[1];
        } else {
            $fonction =  'index';
        }

        // On considère que mon troisieme parametre seront les arguments à fournir à ma fonction récupérée ci-dessus
        // On vérifie que ma variable est déclaré et que elle n'est pas null, si elle n'est pas null, alors elle vaut son contenu
        if(isset($parametres[2])) {
            $args = $parametres[2];
        } else {
            $args = null;
        }

        // Nous avons donc notre controller, il suffit de l'appeler en utilisant 'require_once' ainsi que son chemin, défini dans la consante "CONTROLLER_DIR"
        require_once(CONTROLLEUR_DIR.$controller.'.php');
        // On verifie nos arguments. Si ils ne sont pas null, alors il faut appeler la fonction dans le controller avec des arguments, sinon il faut appeler la fonction sans arguments
        if($args) {
            $fonction($args);
        } else {
            $fonction();
        }
        
    } else { // Si le premier parametre concerpondant au controlleur est vide, alors c'est qu'on cherche a afficher la page d'accueil et on appele le controlleur 'Accueil' et on execute la fontion 'index' contenue dans celui-ci
        require_once(CONTROLLEUR_DIR.'Accueil.php');
        index();
    }