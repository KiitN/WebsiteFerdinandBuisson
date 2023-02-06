<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title><?= $title ?></title>
        <?php
            if (isset($_GET['action']) && $_GET['action'] === 'viewConnection') {
                echo "<link rel='stylesheet' href='src/assets/connectionStyle.css'/>" ;
            } elseif (isset($_GET['action']) && $_GET['action'] === 'viewRegister') {
                echo "<link rel='stylesheet' href='src/assets/registerStyle.css'/>" ;
            } elseif (isset($_GET['action']) && $_GET['action'] === 'connectUser') {
                echo "<link rel='stylesheet' href='src/assets/connectStyle.css'/>" ;
            } else {
                echo "<link rel='stylesheet' href='src/assets/style.css'/>" ;
            }
        ?>
    </head>

    <body onload='loading();'>
        <?= $content ?>
    </body>
</html>