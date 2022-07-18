<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Actualités MGLSI</title>
    <link rel="stylesheet" type="text/css" href="assets/style.css">
</head>

<body>
    <?php require_once 'inc/entete.php'; ?>


    <div class="tabset">
        <!-- Tab 1 -->
        <input type="radio" name="tabset" id="tab1" aria-controls="all" checked>
        <label for="tab1">Tout</label>

        <?php foreach ($categories as $index=>$categorie): ?>
        <input type="radio" name="tabset" id="tab<?=$index+2?>" aria-controls="sport">
        <label for="tab<?=$index+2?>"><?=$categorie->libelle?></label>
        <?php endforeach ?>


        <div class="tab-panels">
            <section id="all" class="tab-panel">
                <h2>Toutes les informations</h2>
                <?php if (!empty($articles)): ?>
                <?php foreach ($articles as $article): ?>
                <div class="article">
                    <h1><?= $article->titre ?></h1>
                    <p><?= substr($article->contenu, 0, 300) . '...' ?></p>
                </div>
                <?php endforeach ?>
                <?php else: ?>
                <div class="message">Aucun article trouvé</div>
                <?php endif ?>
            </section>
            <section id="sport" class="tab-panel">
                <h2>Page SPORT</h2>
                <?php if (!empty($data)): ?>
                <?php foreach ($data as $article): ?>
                <?php if ($article['libelle'] == 'Sport'): ?>
                <div class="article">
                    <h1><?= $article['titre'] ?></h1>
                    <p><?= substr($article['contenu'], 0, 300) . '...' ?></p>
                </div>
                <?php endif ?>
                <?php endforeach ?>
                <?php else: ?>
                <div class="message">Aucun article sur le sport trouvé</div>
                <?php endif ?>
            </section>
            <section id="health" class="tab-panel">
            <h2>Page Santé</h2>
                <?php if (!empty($data)): ?>
                <?php foreach ($data as $article): ?>
                <?php if ($article['libelle'] == 'Santé'): ?>
                <div class="article">
                    <h1><?= $article['titre'] ?></h1>
                    <p><?= substr($article['contenu'], 0, 300) . '...' ?></p>
                </div>
                <?php endif ?>
                <?php endforeach ?>
                <?php else: ?>
                <div class="message">Aucun article sur la santé trouvé</div>
                <?php endif ?>
            </section>
            <section id="education" class="tab-panel">
            <h2>Page Education</h2>
                <?php if (!empty($data)): ?>
                <?php foreach ($data as $article): ?>
                <?php if ($article['libelle'] == 'Education'): ?>
                <div class="article">
                    <h1><?= $article['titre'] ?></h1>
                    <p><?= substr($article['contenu'], 0, 300) . '...' ?></p>
                </div>
                <?php endif ?>
                <?php endforeach ?>
                <?php else: ?>
                <div class="message">Aucun article sur l'education trouvé</div>
                <?php endif ?>
            </section>
            <section id="politique" class="tab-panel">
            <h2>Page Politique</h2>
                <?php if (!empty($data)): ?>
                <?php foreach ($data as $article): ?>
                <?php if ($article['libelle'] == 'Politique'): ?>
                <div class="article">
                    <h1><?= $article['titre'] ?></h1>
                    <p><?= substr($article['contenu'], 0, 300) . '...' ?></p>
                </div>
                <?php endif ?>
                <?php endforeach ?>
                <?php else: ?>
                <div class="message">Aucun article sur la politique trouvé</div>
                <?php endif ?>
            </section>
        </div>

    </div>

</body>

</html>