<?php $title = "Home Page" ?>

<?php ob_start(); ?>
<h1>ERREUR</h1>

<div class="news">
    <h3><?= $errorMessage; ?></h3>
</div>

<?php $content = ob_get_clean(); ?>

<?php require('layout.php'); ?>