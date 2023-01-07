<?php $title = "Home Page" ?>

<?php ob_start(); ?>
<h1>Base de donnée pcverif</h1>
<p class="sous-titre">Compte:</p>

<?php
foreach ($posts as $post) {
?>
    <div class="news">
        <h3>
            Pseudo : <?= htmlspecialchars($post->pseudo); ?>
            <br/>
            <em>id: <?= $post->id; ?></em>
        </h3>
        <p>
            Email : <a href="index.php?action=post&id=<?= urlencode($post->id) ?>" ><?= nl2br(htmlspecialchars($post->email)); ?></a>
        </p>
    </div>
<?php
}
?>

<?php $content = ob_get_clean(); ?>

<?php require('layout.php'); ?>