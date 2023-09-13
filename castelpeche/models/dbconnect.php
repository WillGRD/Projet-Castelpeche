<?php

// Connexion à la BDD
$database = new PDO(
    'mysql:host=localhost;dbname=castelpeche;charset=utf8',
    'root',
    'Bubulle02400.'
);
$recupeArticle = $database->prepare("SELECT * FROM article");   // Préparation de la requête pour récupérer tous les articles
$recupeArticle->execute();  // Exécution de la requête
$articles = $recupeArticle->fetchAll(); // Récupération des résultats de la requête dans un tableau
