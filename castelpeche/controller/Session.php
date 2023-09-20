<?php
function connexion()
{
    if(!$_POST) {
        require("templates/forms/connectAdmin.php");
    } elseif(trim($_POST['username']) === '' && trim($_POST['password']) === '') {
        echo 'Les champs ne peuvent pas être vides';
    } else  {
        $user = $_POST["username"];
        $mdp = $_POST["password"];
        if (!empty($user) && !empty($mdp)) {
            require_once("models/connectionAdmin.php");
            connectionAdmin($user, $mdp);
        }
    }
}

function deconnexion()
{
    require_once("models/connectionAdmin.php");
    deconnectionAdmin();
}
