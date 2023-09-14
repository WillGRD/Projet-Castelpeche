<?php

require("models/dbconnect.php");

function show($type) {
    require("templates/peches/".$type.".php");
}