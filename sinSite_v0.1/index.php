<?php

require_once('src/controllers/homeController.php');
require_once('src/controllers/viewConnectionController.php');
require_once('src/controllers/connectionController.php');
require_once('src/controllers/viewRegisterController.php');
require_once('src/controllers/registerController.php');

try {
    if (isset($_GET['action']) && $_GET['action'] !== '') {
        if ($_GET['action'] === 'post') {
            if (isset($_GET['id']) && $_GET['id'] > 0) {
                $identifier = $_GET['id'];
    
                post($identifier);
            } else {
                echo 'Erreur : aucun identifiant de billet envoyé';
    
                die;
            }
        } elseif ($_GET['action'] === 'viewConnection') {
                
                connectionpage();
                
        } elseif ($_GET['action'] === 'register') {
                
                addUser($_POST);
                
        } elseif ($_GET['action'] === 'viewRegister') {
                
                registerpage();
                
        } elseif ($_GET['action'] === 'connectUser') {
                
                connection($_POST);
                
        } else {
            $errorMessage = "Erreur 404 : la page que vous recherchez n'existe pas.";
            
            require("src/template/error.php");
        }
    } else {
        homepage();
    }
} catch(Exception $e) {
    $errorMessage = $e->getMessage();
    
    require("src/template/error.php");
}