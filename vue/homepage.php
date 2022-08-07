<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Actualités MIABD</title>
    <link rel="stylesheet" type="text/css" href="../assets/style.css">
</head>
<body>
<?php require_once 'inc/entete.php'; ?>
<div></div>
<div class="menu">
    <div class="navigation">
        <a href="/">Acceuil</a>
        <?php if (!empty($categories)) {
            foreach ($categories as $categorie) :?>
                <a href="/categorie/<?= $categorie->id ?>">
                    <?php echo $categorie->libelle ?>
                </a>
            <?php endforeach;
        } ?>
    </div>
    <div class="connection">
        <a href="login">Se connecter</a>
    </div>
</div>
<?php if (!empty($articles)): ?>
    <?php foreach ($articles as $article): ?>
        <div class="box">
            <a href="/article/<?= $article->id ?>">
                <h1><?= $article->titre ?></h1>
            </a>
            <p><?= substr($article->contenu, 0, 300) . '...' ?></p>
        </div>
    <?php endforeach ?>
<?php else: ?>
    <?php if (!empty($article)): ?>
        <div class="box">
            <h1><?= $article->titre ?></h1>
            <p><?= substr($article->contenu, 0, 300) . '...' ?></p>
        </div>
    <?php else: ?>
        <div class="message">Aucun article trouvé</div>
    <?php endif ?>
<?php endif ?>

</body>

</html>