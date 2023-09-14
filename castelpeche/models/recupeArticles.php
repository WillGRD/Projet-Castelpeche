<?php
require("models/dbconnect.php");

function getArticles() {
    global $database;

    // Préparation de la requête pour récupérer tous les articles
    $recupeArticle = $database->prepare("SELECT * FROM article");

    // Exécution de la requête
    $recupeArticle->execute();

    // Récupération des résultats de la requête dans un tableau
    $listeArticles = $recupeArticle->fetchAll();

    return $listeArticles;
}