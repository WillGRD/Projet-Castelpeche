<?php
session_start();
require_once('models/dbconnect.php');   // On appelle le fichier de conexion de la base de donnée

function connectionAdmin($user, $mdp) {
    global $database;

    $conection = $database->prepare("SELECT * FROM admin WHERE user = :user AND mdp = :pwd"); //On prépare la requete
    $conection->bindParam('user', $user, PDO::PARAM_STR);   //On ajoute les paramétres à la requete
    $conection->bindParam('pwd', $mdp, PDO::PARAM_STR);    //On ajoute les paramétres à la requete

    $conection->execute();    //On execute la requete
    $isconnected = $conection->rowCount();    //On compte les lignes de la requete
    if ($isconnected === 1) {    //On fait une condition (si le nombre de ligne est strictement égale à un)
        $_SESSION['user'] = $user;    //On va stocké ce que l'utilisateur rentre dans un tableau SI l'utilisateur existe
        header('Location: /castelpeche');   //Charge l'entéte de la page, redirection vers l'accueil

        //Si le champ est vide on reste sur la page connection pour remplir le champ correctement
    } else {
        header('Location: /castelpeche/session/connexion');   //Charge l'entéte de la page, redirection vers le formulaire de connexion
    }
}

function deconnectionAdmin() {
    $_SESSION = [];
    session_destroy();
    header('Location: /castelpeche');   //Charge l'entéte de la page, redirection vers accueil
}
