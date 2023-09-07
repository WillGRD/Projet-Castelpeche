<?php
require_once($_SERVER['DOCUMENT_ROOT'] . '/castelpeche/models/dbconnect.php');

$name = $_POST["titre"];
$photo = $_POST["photo"];
$desc = $_POST["description"];

if (!empty($name) && !empty($photo) && !empty($desc)) {
$requeteAjout = $database->prepare("INSERT INTO article(nom, image, description) VALUES (:nom, :image, :description)");
$requeteAjout->bindParam('nom', $name);
$requeteAjout->bindParam('image', $photo);
$requeteAjout->bindParam('description', $desc);

$requeteAjout->execute();

header('Location: ../templates/actualite.php');
}

else {
    echo 'Vous devez renseigner quelque chose';
}