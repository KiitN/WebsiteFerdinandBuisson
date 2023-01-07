<?php $title = "Histoire" ?>

<?php ob_start(); ?>
<h1>Histoire</h1>
<p><a href="index.php">Retour à la liste des auteurs</a></p>

<div class="news">
    <h3>
        Pseudo : <?= htmlspecialchars($post->pseudo); ?>
        <br/>
        <em>id: <?= $post->id; ?></em>
    </h3>
    <p>
        Email : <?= nl2br(htmlspecialchars($post->email)); ?>
    </p>
</div>
        
<?php
foreach ($stories as $story) {
?>
    <div class="news hist">
        <h2>Histoire</h2>
        <p>
            <?= $story->name; ?><br/>
            texte n°<?= $story->number; ?><br/><br/>
            histoire : <br/> <?= htmlspecialchars($story->text); ?>
        </p>
    </div>
        
<?php
}
?>

<div class="news">
    <form action="index.php?action=addStory&id=<?= $post->id ?>" method="post">
        <input type="text" id="name" name="name" placeholder="name"/>
        <textarea id="text" name="name" cols="20" rows="5" placeholder="story"></textarea>
        <input type="submit" id="button"/>
    </form>
</div>

<?php $content = ob_get_clean(); ?>

<?php require('layout.php'); ?>