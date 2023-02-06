<?php

require_once('src/models/user.php');
require_once("src/lib/database.php");

use Application\Model\AddUserRepository;

function addUser(array $input) {
	
	$addUserRepository = new AddUserRepository();
	$addUserRepository->connection = new DatabaseConnection();
	
	
	$success = $addUserRepository->addUser($input);
	if (!$success) {
    	die('Impossible d\'ajouter le compte !');
	} else {
    	header('Location: index.php?action=viewConnection');
	}
}