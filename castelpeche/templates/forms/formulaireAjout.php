<?php require_once($_SERVER['DOCUMENT_ROOT'] . '/castelpeche/templates/header.php') ?>

<div class="form">
    <h1>Formulaire d'ajout d'article Admin</h1>

    <form action="../../models/ajoutArticle.php" method="post">
        <div class="formart">
            <label for="titre">TITRE</label>
            <input class="input" type="text" id="titre" name="titre" required>
        </div>

        <div class="formart">
            <label for="photo">PHOTO</label>
            <input class="input" type="photo" id="photo" name="photo" required>
        </div>

        <div class="formart">
            <label for="description">DESCRIPTION</label>
            <textarea class="input" rows="5" type="description" id="description" name="description" required></textarea>
        </div>

        <input class="formbutton" type="submit" value="Ajouter l'article">
    </form>
</div>

<?php require_once($_SERVER['DOCUMENT_ROOT'] . '/castelpeche/templates/footer.php') ?>