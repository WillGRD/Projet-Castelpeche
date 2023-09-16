<?php 

// ICI VOUS RETROUVEREZ L'ENSEMBLE DES FONCTIONS DE VOS FICHIERS QUI PERMETTENT DE GERER LES ARTICLES //
require('models/dbconnect.php');

function addArticle($titre, $image, $description) {
    global $database;

    $requeteAjout = $database->prepare("INSERT INTO article(nom, image, description) VALUES (:nom, :image, :description)");  //On prépare la requete
    $requeteAjout->bindParam('nom', $titre, PDO::PARAM_STR);               //On ajoute les paramétres à la requete
    $requeteAjout->bindParam('image', $image, PDO::PARAM_STR);            //On ajoute les paramétres à la requete
    $requeteAjout->bindParam('description', $description, PDO::PARAM_STR);       //On ajoute les paramétres à la requete

    $requeteAjout->execute();    //On execute la requete

    $nbLignes = $requeteAjout->rowCount();
    if($nbLignes === 0) {
        echo "L'insertion à échoué";
    } else {
        header('Location: /castelpeche/actualites/show');
    }
}

function supprimerArticle($idArticle, $photoArticle) {
    global $database;
    $article = intval($idArticle);
    $repertoireUploads = "uploads/";
    unlink($repertoireUploads.$photoArticle); // On supprime la photo du serveur
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
