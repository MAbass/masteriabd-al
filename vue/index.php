<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Actualités MIABD</title>
    <link rel="stylesheet" type="text/css" href="assets/style.css">
</head>


<body>
    <?php require_once 'inc/entete.php'; ?>
    <div></div>
    <div class="menu">
        <a href="index.php">Acceuil</a>
        <?php foreach ($categories as $categorie) :?>
        <a href="index.php?action=categorie&id=<?php echo $categorie->id?>"><?php echo $categorie->libelle ?></a>
        <?php endforeach?>
    </div>
    <?php if (!empty($articles)):?>
    <?php foreach ($articles as $article):?>
    <div class="box">
        <a href="index.php?action=article&id=<?php echo $article->id?>">
            <h1><?= $article->titre?></h1>
        </a>
        <p><?= substr($article->contenu, 0, 300) . '...'?></p>
    </div>
    <?php endforeach?>
    <?php else:?>
    <?php if(!empty($article)):?>
    <div class="box">
        <h1><?= $article->titre?></h1>
        <p><?= substr($article->contenu, 0, 300) . '...'?></p>
    </div>
    <?php else:?>
    <div class="message">Aucun article trouvé</div>
    <?php endif?>
    <?php endif?>

</body>

</html>