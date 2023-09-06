<?php
require_once('dbconnect.php');

    
    $titre = $_POST["titre"];               
    $photo = $_POST["photo"];             
    $description = $_POST["description"];   
    $id = $_POST["id"];          
    
    

if (!empty($titre) && !empty($photo) && !empty($description) && !empty($id)) {
$requeteMaj = $database->prepare("UPDATE article SET nom = :titre, image = :photo, description = :desc WHERE id = :art");

$requeteMaj->bindParam('titre', $titre);
$requeteMaj->bindParam('photo', $photo);
$requeteMaj->bindParam('desc', $description);
$requeteMaj->bindParam('art', $id);

$requeteMaj->execute();

header('Location: ../actualite.php');


}
else {
    echo 'Vous n\'avez rien modifier';
}