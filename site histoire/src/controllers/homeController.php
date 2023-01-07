<?php

require_once("model/model.php");

function homepage() {

    $posts = getPosts();

    require("front/homepage.php");
}