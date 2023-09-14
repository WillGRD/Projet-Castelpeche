<?php
require_once("templates/header.php");
?>

<div class="form">
    <h1>Modification d'article</h1>
    <form method="post">
        <input type="hidden" name="id" value="<?php echo $idArticle ?>">
        <div class="formart">
            <label for="titre">TITRE</label>
            <input class="input" type="text" id="titre" name="titre" required value="<?php echo $results["nom"] ?>">
        </div>
        <div class="formart">
            <label for="photo">PHOTO</label>
            <input class="input" type="photo" id="photo" name="photo" required value="<?php echo $results["image"] ?>">
        </div>
        <div class="formart" id="formdesc">
            <label for="description">DESCRIPTION</label>
            <textarea class="input" rows="5" type="description" id="description" name="description" required><?php echo $results["description"] ?></textarea>
        </div>
        <input class="formbutton" type="submit" value="Modifier l'article">
    </form>
</div>




<?php
require_once("templates/footer.php");
