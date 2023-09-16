<?php
    require_once("templates/header.php");;
?>
<div class="carna">
<?php

// Début de la boucle foreach pour itérer sur le tableau $articles
foreach ($articles as $art) {
?>
    <article class="carnafull">
        <img src="/castelpeche/uploads/<?php echo $art["image"]; ?>" alt="Une image ajouter par l'administrateur">
        <div class="h3p">
            <h3><?php echo $art["nom"]; ?></h3> <!-- Affiche le nom de l'article -->
            <?php if (!empty($_SESSION['user'])) {
            ?>
                <a href="/castelpeche/actualites/update/<?php echo $art["id"] ?>" class="update btn btn-success"> Modifier</a> <!-- Je récupére l'id de l'article pour le modifier -->
                <form method="post" action="delete">
                    <input type="hidden" name="photo" value="<?php echo $art["image"]; ?>">
                    <input type="hidden" name="article" value="<?php echo $art["id"] ?>"><!-- Je récupére l'id de l'article pour le suprimer -->
                    <input type="submit" class="btn-submit submit-btn btn-warning btn" value="Supprimer">
                </form>
            <?php } ?>

            <p><?php echo $art["description"]; ?></p> <!-- Affiche la description de l'article -->
        </div>
    </article>
<?php
} // Fin de la boucle foreach
?>
</div>
<?php
// Inclusion du fichier footer.php situé dans le répertoire DOCUMENT_ROOT/php/
require_once("templates/footer.php");
?>