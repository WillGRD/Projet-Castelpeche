<?php

require("models/dbconnect.php");
require_once("models/articleModel.php");
function show() {
    $articles = getArticles();
    require("templates/actualite.php");
}

function add() {
    if(empty($_POST) && empty($_FILES)) {
        require("templates/forms/formulaireAjout.php");
    } else {
        $repertoireUploads = "uploads/";
        $name = $_POST["titre"];         //On récupére les variable envoyer du formulaire en méthode POST
        $desc = $_POST["description"];   //On récupére les variable envoyer du formulaire en méthode POST
        $nomFichier = basename($_FILES["photo"]["name"]);
        $repertoireFichierCible = $repertoireUploads . $nomFichier;
        $extensionFichier = pathinfo($repertoireFichierCible,PATHINFO_EXTENSION);
        // On autorise que certains types d'images 
        $extensionsAutorisees = array('jpg','png','jpeg');
        if(in_array($extensionFichier, $extensionsAutorisees)) {
            move_uploaded_file($_FILES["photo"]["tmp_name"], $repertoireFichierCible);
            if (!empty($name) && !empty($nomFichier) && !empty($desc)) {
                addArticle($name, $nomFichier, $desc);
            }
        }
    }
}

function delete() {
    if(!empty($_POST["article"]) && !empty($_POST["photo"])) {
        $idArticle = $_POST["article"];
        $photoArticle = $_POST["photo"];
        supprimerArticle($idArticle, $photoArticle);
    }
}

function update($article) {
    $idArticle = intval($article);
    if(empty($_POST)) {
        $results = getArticle($idArticle);
        require("templates/forms/updateForm.php");
    } else {
        $titre = $_POST["titre"];     //On récupére les variable envoyer du formulaire en méthode POST
        $photo = $_POST["photo"];     //On récupére les variable envoyer du formulaire en méthode POST
        $description = $_POST["description"];    //On récupére les variable envoyer du formulaire en méthode POST
        $id = $_POST["id"];     //On récupére les variables envoyer du formulaire en méthode POST
        updateArticle($id, $titre, $photo, $description);
    }
}