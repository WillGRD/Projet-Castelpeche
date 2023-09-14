<?php
require("models/dbconnect.php");

function supprimerArticle($idArticle) {
    global $database;
    $article = intval($idArticle);

    $requeteSupresion = $database->prepare("DELETE FROM article WHERE id=:id");  // On prepare la requete
    $requeteSupresion->bindParam('id', $article, PDO::PARAM_INT);   // Requête préparé, injecté dans la requete l'identifiant récupéré par POST afin de sécuriser la requête.
    $requeteSupresion->execute();   // On execute la requete
    $nbLignes = $requeteSupresion->rowCount();
    if($nbLignes === 0) {
        echo "Un problème est survenu lors de la suppression de l'article";
    } else {
        header('Location: /castelpeche/actualites/show');
    }
}