<?php
require('models/dbconnect.php');

function addArticle($titre, $image, $description) {
    global $database;

    $requeteAjout = $database->prepare("INSERT INTO article(nom, image, description) VALUES (:nom, :image, :description)");  //On prépare la requete
    $requeteAjout->bindParam('nom', $titre, PDO::PARAM_STR);               //On ajoute les paramétres à la requete
    $requeteAjout->bindParam('image', $image, PDO::PARAM_STR);            //On ajoute les paramétres à la requete
    $requeteAjout->bindParam('description', $description, PDO::PARAM_STR);       //On ajoute les paramétres à la requete

    $requeteAjout->execute();    //On execute la requete

    $nbLignes = $requeteAjout->rowCount();
    if($nbLignes === 0) {
        echo "L'insertion à échoué";
    } else {
        header('Location: /castelpeche/actualites/show');
    }
}