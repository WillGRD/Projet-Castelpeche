<?php

require_once("templates/header.php");
?>

<div class="form">
    <h1>Connection Admin</h1>
    <form action="connexion" method="post">
    
        <div class="formart">
            <label for="username">Nom d'utilisateur</label>
            <input type="text" name="username" id="username">
        </div>
        <div class="formart">
            <label for="password">Mot de Passe</label>
            <input type="password" name="password" id="password">
        </div>
        <button class="formbutton" type="submit">Connexion</button>
    
    </form>
</div>

<?php 
require_once("templates/footer.php");
?>