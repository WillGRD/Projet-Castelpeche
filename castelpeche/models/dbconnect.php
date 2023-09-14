<?php
global $database;
// Connexion à la BDD
$database = new PDO(
    'mysql:host=localhost;dbname=castelpeche;charset=utf8',
    'root',
    'Bubulle02400.'
);