<?php

$title = 'SIN';

ob_start();

?>
        <div id="loader">
            <img src='src/assets/media/logo.png' id="imgLoader"/>
        </div>

        <div class='container'>
            <div class='logo-container'>
                <img src='src/assets/media/logo.png'/>
            </div>
            
            <div class='main'>
                <header>
                    <a href='index.php?action=viewConnection'>
                        <div class='avatar-container'>
                            <img src='src/assets/media/avatar.png' class='avatar'/>
                        </div>
                    </a>
                </header>
                <main>
                    <h1>Bienvenue sur ...</h1>
                    <p>Qu'est ce que la sin au lycée ferdinant buisson.</p>
                </main>
            </div>
        </div>
        
        <script src="src/assets/script.js"></script>
        
<?php
$content = ob_get_clean();

require('src/template/layout.php');