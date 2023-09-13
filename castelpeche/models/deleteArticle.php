<?php
require_once($_SERVER['DOCUMENT_ROOT'] . '/castelpeche/models/dbconnect.php');

$article = $_POST["article"];    //On récupére les variable envoyer du formulaire en méthode POST
$requeteSupresion = $database->prepare("DELETE FROM article WHERE id=:id");  // On prepare la requete
$requeteSupresion->bindParam('id', $article);   // Requête préparé, injecté dans la requete l'identifiant récupéré par POST afin de sécuriser la requête.
$requeteSupresion->execute();   // On execute la requete
