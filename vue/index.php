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
        <a href="index.php?categorie=1">Magazine</a>
        <a href="index.php?categorie=2">Sport</a>
        <a href="index.php?categorie=3">Santé</a>
        <a href="index.php?categorie=4">Politique</a>
    </div>
    <?php if (!empty($articles)):?>
    <?php foreach ($articles as $article):?>
    <div class="box">
        <h1><?= $article->titre?></h1>
        <p><?= substr($article->contenu, 0, 300) . '...'?></p>
    </div>
    <?php endforeach?>
    <?php else:?>
    <div class="message">Aucun article trouvé</div>
    <?php endif?>

</body>

</html>