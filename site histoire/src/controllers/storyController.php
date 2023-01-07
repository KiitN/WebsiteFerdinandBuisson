<?php

require_once("model/model.php");

function post(string $identifier) {
    
    $post = getPost($identifier);
    $stories = getStories($identifier);

    require("front/storypage.php");
}