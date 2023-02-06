<?php

$title = 'SIN | Accueil';

ob_start();

?>

        <?php
            if ($connectUser->passLvl === 1) {
                include('header/header-prof.html');
            } else {
                include('header/header-eleve.html');
            }
        ?>

        <div>
            <p>Fname: <?= $connectUser->Fname;?></p>
            <p>Email: <?= $connectUser->email;?></p>
            <p>passLvl: <?= $connectUser->passLvl;?></p>
            <p>classe: <?= $connectUser->classe;?></p>
            <p>name: <?= $connectUser->name;?></p>
            <p>id: <?= $connectUser->id;?></p>
        </div>
        
<?php
$content = ob_get_clean();

require('layout.php');