<?php

// Connexion à la BDD
$database = new PDO(
    'mysql:host=localhost;dbname=castelpeche;charset=utf8',
    'root',
    'Bubulle02400.'
);

// Préparation de la requête pour récupérer tous les articles
$recupeArticle = $database->prepare("SELECT * FROM article");

// Exécution de la requête
$recupeArticle->execute();

// Récupération des résultats de la requête dans un tableau
$articles = $recupeArticle->fetchAll();
