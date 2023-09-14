<?php

require("models/dbconnect.php");

function show() {
    require_once("models/recupeArticles.php");
    $articles = getArticles();
    require("templates/actualite.php");
}

function add() {
    if(empty($_POST)) {
        require("templates/forms/formulaireAjout.php");
    } else {
        $name = $_POST["titre"];         //On récupére les variable envoyer du formulaire en méthode POST
        $photo = $_POST["photo"];        //On récupére les variable envoyer du formulaire en méthode POST
        $desc = $_POST["description"];   //On récupére les variable envoyer du formulaire en méthode POST
        if (!empty($name) && !empty($photo) && !empty($desc)) {
            require_once("models/ajoutArticle.php");
            addArticle($name, $photo, $desc);
        }
    }
}

function delete() {
    if(!empty($_POST["article"])) {
        $idArticle = $_POST["article"];
        require_once("models/deleteArticle.php");
        supprimerArticle($idArticle);
    }
}

function update($article) {
    require_once("models/updateArticle.php");
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