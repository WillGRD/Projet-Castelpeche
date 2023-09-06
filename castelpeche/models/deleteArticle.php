<?php
require_once($_SERVER['DOCUMENT_ROOT'] . '/models/dbconnect.php');

$article = $_POST["article"];
$requeteSupresion = $database->prepare("DELETE FROM article WHERE id=:id");
$requeteSupresion->bindParam('id', $article);   // Requête préparé, injecté dans la requete l'identifiant récupéré par POST afin de sécuriser la requête.
$requeteSupresion->execute();
