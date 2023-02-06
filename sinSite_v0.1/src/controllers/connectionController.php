<?php

require_once("src/models/user.php");
require_once("src/lib/database.php");

use Application\Model\UserRepository;

function connection(array $input) {
    $email = NULL;
	$passwd = NULL;
	if (!empty($input['email']) && !empty($input['passwd'])) {
    	$email = $input['email'];
    	$passwd = $input['passwd'];
	} else {
    	die('Les données du formulaire sont invalides.');
	}
    
    $userRepository = new UserRepository();
    $userRepository->connection = new DatabaseConnection();
    $connectUser = $userRepository->verifyUser($email);
    
    if (password_verify($passwd, $connectUser->passwd)) {
        require("src/template/homeConnect.php");
    } else {
        die('mot de passe faux');
    }
}