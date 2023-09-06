<?php
require_once('dbconnect.php');
// Préparation de la requête pour récupérer tous les articles
$recupeArticle = $database->prepare("SELECT * FROM article");

// Exécution de la requête
$recupeArticle->execute();

// Récupération des résultats de la requête dans un tableau
$articles = $recupeArticle->fetchAll();
