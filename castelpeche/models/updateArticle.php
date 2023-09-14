<?php
require("models/dbconnect.php");

// $titre = $_POST["titre"];     //On récupére les variable envoyer du formulaire en méthode POST
// $photo = $_POST["photo"];     //On récupére les variable envoyer du formulaire en méthode POST
// $description = $_POST["description"];    //On récupére les variable envoyer du formulaire en méthode POST
// $id = $_POST["id"];     //On récupére les variables envoyer du formulaire en méthode POST



function updateArticle($id, $titre, $photo, $description)
{
    global $database;

    if (!empty($titre) && !empty($photo) && !empty($description) && !empty($id)) {    //On vérifie que toute les variables ne soit pas vide
        $requeteMaj = $database->prepare("UPDATE article SET nom = :titre, image = :photo, description = :desc WHERE id = :art"); // On prepare la requete

        $requeteMaj->bindParam('titre', $titre, PDO::PARAM_STR);        //On ajoute les paramétres à la requete
        $requeteMaj->bindParam('photo', $photo, PDO::PARAM_STR);        //On ajoute les paramétres à la requete
        $requeteMaj->bindParam('desc', $description, PDO::PARAM_STR);   //On ajoute les paramétres à la requete
        $requeteMaj->bindParam('art', $id, PDO::PARAM_INT);             //On ajoute les paramétres à la requete

        $requeteMaj->execute();        // On execute la requete

        header('Location: /castelpeche/actualites/show');   //Charge l'entéte de la page, redirection vers les actualites
    } else {
        echo 'Il manque un champ de renseigné';     // //On affiche le echo quand l'utilisateur ne renseigne pas au moins un des champs
    }
}


function getArticle($id)
{
    global $database;

    $article = $database->prepare("SELECT * FROM `article` WHERE id = :art");
    $article->bindParam('art', $id);
    $article->execute();

    $detailsArticle = $article->fetch(PDO::FETCH_ASSOC);

    return $detailsArticle;
}
