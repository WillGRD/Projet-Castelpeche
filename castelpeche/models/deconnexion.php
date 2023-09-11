<?php
session_start();    //On lance la session
$_SESSION = [];       
session_destroy();
header('Location: /castelpeche/index.php');
