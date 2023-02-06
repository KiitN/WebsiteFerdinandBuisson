<?php

require_once("src/models/user.php");
require_once("src/lib/database.php");

use Application\Model\PostRepository;

function registerpage() {
    require("src/template/registerTemplate.php");
}