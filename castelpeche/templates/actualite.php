<?php require_once($_SERVER['DOCUMENT_ROOT'] . '/templates/header.php') ?>
<?php require_once($_SERVER['DOCUMENT_ROOT'] . '/models/recupeArticles.php') ?>

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
                <a href="../forms/updateForm.php?id=<?php echo $art["id"] ?>" class="update"> Modifier</a> <!-- Je récupére l'id de l'article pour le modifier -->
                <button class="sup" data-id="<?php echo $art["id"] ?>">Suprimer</button> <!-- Je récupére l'id de l'article pour le suprimer -->
            <?php } ?>

            <p><?php echo $art["description"]; ?></p> <!-- Affiche la description de l'article -->
        </div>
    </article>
<?php
} // Fin de la boucle foreach

// Inclusion du fichier footer.php situé dans le répertoire DOCUMENT_ROOT/php/
require_once($_SERVER['DOCUMENT_ROOT'] . '/templates/footer.php')
?>