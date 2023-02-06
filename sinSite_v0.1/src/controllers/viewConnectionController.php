<?php

require_once("src/models/user.php");
require_once("src/lib/database.php");

use Application\Model\PostRepository;

function connectionpage() {
    require("src/template/connectionTemplate.php");
}