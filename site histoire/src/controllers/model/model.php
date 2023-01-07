<?php

class StoryC {
    
    public int $number;
    public string $name;
    public string $text;
    public int $post_id;
}

class UserC {
    
    public int $id;
    public string $pseudo;
    public string $email;
    public string $password;
}



function getPosts(){
    
    $database = dbConnect();
    
    // We retrieve the 5 last blog posts.
    $q = $database->query(
        "SELECT * FROM `users` WHERE 1 ORDER BY id"
    );
    $posts = [];
    while(($row= $q->fetch())) {
        $post = new UserC();
        $post->id = $row['id'];
        $post->pseudo = $row['pseudo'];
        $post->email = $row['email'];
        $post->passwd = $row['password'];
    
        $posts[] = $post;
    }
    
    return $posts;
}

function getPost($identifier) {
    
    $database = dbConnect();
 
    $q = $database->prepare(
        "SELECT * FROM `users` WHERE id = ?"
    );
    $q->execute([$identifier]);
 
    $row = $q->fetch();
    $post = new UserC();
    $post->id = $row['id'];
    $post->pseudo = $row['pseudo'];
    $post->email = $row['email'];
    $post->passwd = $row['password'];
 
    return $post;
}

function getStories($identifier)
{
    $database = dbConnect();
 
    $q = $database->prepare(
        "SELECT * FROM stories WHERE post_id = ? ORDER BY id"
    );
    $q->execute([$identifier]);
 
    $stories = [];
    while (($row = $q->fetch())) {
        $story = new StoryC();
        $story->number = $row['id'];
        $story->name = $row['name'];
        $story->text = $row['text'];
        $story->post_id = $row['post_id'];
        
        $stories[] = $story;
    }

    return $stories;
}


function dbConnect()
{
	try {
    	$database = new PDO('mysql:host=localhost;dbname=pcverif;charset=utf8', 'root', '');

    	return $database;
	} catch(Exception $e) {
    	die('Erreur : '.$e->getMessage());
	}
}