<?php
require_once($_SERVER['DOCUMENT_ROOT'] . '/castelpeche/models/dbconnect.php');

$name = $_POST["titre"];         //On récupére les variable envoyer du formulaire en méthode POST
$photo = $_POST["photo"];        //On récupére les variable envoyer du formulaire en méthode POST
$desc = $_POST["description"];   //On récupére les variable envoyer du formulaire en méthode POST

if (!empty($name) && !empty($photo) && !empty($desc)) {    //On vérifie que toute les variables ne soit pas vide
$requeteAjout = $database->prepare("INSERT INTO article(nom, image, description) VALUES (:nom, :image, :description)");  //On prépare la requete
$requeteAjout->bindParam('nom', $name);               //On ajoute les paramétres à la requete
$requeteAjout->bindParam('image', $photo);            //On ajoute les paramétres à la requete
$requeteAjout->bindParam('description', $desc);       //On ajoute les paramétres à la requete

$requeteAjout->execute();    //On execute la requete

header('Location: ../templates/actualite.php'); //Charge l'entéte de la page, redirection vers actualite.php
}

else {             //Si le champ est vide on reste sur la page connection pour remplir le champ correctement
    echo 'Vous devez renseigner quelque chose';   //On affiche le echo quand l'utilisateur ne renseigne pas au moins un des champs
}


// FAIRE DES FONCTIONS POUR LE MODEL QUI GERE LES ARTICLES !!!!!!