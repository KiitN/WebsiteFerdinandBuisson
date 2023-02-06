<?php

$title = 'SIN | Connection';

ob_start();

?>

        <!-- include header -->
        <header></header>
        
        <div class='main'>
            <div class='avatar'>
                <img src='src/assets/media/avatar.png'/>
            </div>
            <form method='post' action='index.php?action=connectUser'>
                <div class='input-account'>
                    <div class='users-input'>
                        <label for='email'>MAIL</label>
                        <input type='text' id='email' name='email' placeholder='Mail' required autofocus/>
                    </div>
                    <div id='account-separation'></div>
                    <div class='users-input'>
                        <label for='passwd'>MOT DE PASSE</label>
                        <input type='password' id='passwd' name='passwd' placeholder='Mot de passe' required/>
                    </div>
                </div>
                
                <div class='input-button'>
                    <input type='submit' name='submit' id='submit-button' class='button' value='CONNECTION'/>
                    
                    <div id='button-separation'>
                        <div class='mi-separation'></div>
                        <p id='text-separation'>OU</p>
                        <div class='mi-separation'></div>
                    </div>
                    
                    <a href='index.php?action=viewRegister' class='button'>S'INSCRIRE</a>
                </div>
            </form>
        </div>
        
<?php
$content = ob_get_clean();

require('src/template/layout.php');