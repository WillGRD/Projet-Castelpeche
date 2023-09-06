<?php
require_once($_SERVER['DOCUMENT_ROOT'] . '/castelpeche/templates/header.php');
require_once($_SERVER['DOCUMENT_ROOT'] . '/models/dbconnect.php');


$idArticle = $_GET["id"];


$article = $database->prepare("SELECT * FROM `article` WHERE id = :art");
$article->bindParam('art', $idArticle);
$article->execute();

$results = $article->fetchAll(PDO::FETCH_ASSOC);

?>

<div class="form">
    <h1>Modification d'article</h1>
    <form action="./db/updateArticle.php" method="post">
        <input type="hidden" name="id" value="<?php echo $idArticle ?>">
        <?php
        foreach ($results as $articleCourant) { ?>
            <div class="formart">
                <label for="titre">TITRE</label>
                <input class="input" type="text" id="titre" name="titre" required value="<?php echo $articleCourant["nom"] ?>">
            </div>
            <div class="formart">
                <label for="photo">PHOTO</label>
                <input class="input" type="photo" id="photo" name="photo" required value="<?php echo $articleCourant["image"] ?>">
            </div>
            <div class="formart" id="formdesc">
                <label for="description">DESCRIPTION</label>
                <input class="input" cols="30" rows="5" type="description" id="description" name="description" required value="<?php echo $articleCourant["description"] ?>">
            </div>
        <?php } ?>




        <input class="formbutton" type="submit" value="Modifier l'article">
    </form>
</div>




<?php
require_once($_SERVER['DOCUMENT_ROOT'] . '/castelpeche/templates/footer.php');
