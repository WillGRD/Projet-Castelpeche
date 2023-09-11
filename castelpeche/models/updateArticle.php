<?php
require_once($_SERVER['DOCUMENT_ROOT'] . '/castelpeche/models/dbconnect.php');

$titre = $_POST["titre"];     //On récupére les variable envoyer du formulaire en méthode POST
$photo = $_POST["photo"];     //On récupére les variable envoyer du formulaire en méthode POST
$description = $_POST["description"];    //On récupére les variable envoyer du formulaire en méthode POST
$id = $_POST["id"];     //On récupére les variable envoyer du formulaire en méthode POST

if (!empty($titre) && !empty($photo) && !empty($description) && !empty($id)) {    //On vérifie que toute les variables ne soit pas vide
    $requeteMaj = $database->prepare("UPDATE article SET nom = :titre, image = :photo, description = :desc WHERE id = :art"); // On prepare la requete

    $requeteMaj->bindParam('titre', $titre);        //On ajoute les paramétres à la requete
    $requeteMaj->bindParam('photo', $photo);        //On ajoute les paramétres à la requete
    $requeteMaj->bindParam('desc', $description);   //On ajoute les paramétres à la requete
    $requeteMaj->bindParam('art', $id);             //On ajoute les paramétres à la requete

    $requeteMaj->execute();        // On execute la requete

    header('Location: ../templates/actualite.php');   //Charge l'entéte de la page, redirection vers actualite.php
} else {
    echo 'Vous n\'avez rien modifier';     // //On affiche le echo quand l'utilisateur ne renseigne pas au moins un des champs
}
