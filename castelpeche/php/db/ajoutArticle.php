<?php
require_once('dbconnect.php');

$name = $_POST["titre"];
$photo = $_POST["photo"];
$desc = $_POST["description"];

$requeteAjout = $database->prepare("INSERT INTO article(nom, image, description) VALUES (:nom, :image, :description)");
$requeteAjout->bindParam('nom', $name);
$requeteAjout->bindParam('image', $photo);
$requeteAjout->bindParam('description', $desc);

$requeteAjout->execute();
echo 'Article bien ajouté';

header('Location: ../actualite.php');




