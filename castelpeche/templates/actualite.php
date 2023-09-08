<?php require_once($_SERVER['DOCUMENT_ROOT'] . '/castelpeche/templates/header.php') ?>
<?php require_once($_SERVER['DOCUMENT_ROOT'] . '/castelpeche/models/recupeArticles.php') ?>
<div class="carna">
<?php

// Début de la boucle foreach pour itérer sur le tableau $articles
foreach ($articles as $art) {
?>
    <article class="carnafull">
        <img src=<?php echo $art["image"]; ?> alt="Une image ajouter par l'administrateur">
        <div class="h3p">
            <h3><?php echo $art["nom"]; ?></h3> <!-- Affiche le nom de l'article -->
            <?php if (!empty($_SESSION['user'])) {
            ?>
                <a href="/castelpeche/templates/forms/updateForm.php?id=<?php echo $art["id"] ?>" class="update btn btn-success"> Modifier</a> <!-- Je récupére l'id de l'article pour le modifier -->
                <button class="sup formbutton btn-warning btn" data-id="<?php echo $art["id"] ?>">Suprimer</button> <!-- Je récupére l'id de l'article pour le suprimer -->
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
require_once($_SERVER['DOCUMENT_ROOT'] . '/castelpeche/templates/footer.php')
?>