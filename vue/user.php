<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Utilisateurs</title>
    <style>
        .box {
            display: flex;
            flex-direction: row;
        }

        .table {
            width: 50%;
            height: 100vh;
        }

        .form {
            width: 50%;
            height: 100vh;
            background-color: #f2f2f2;
        }

        .text-header {
            text-align: center;
        }

        /*    For form */
        input[type=text], input[type=password] {
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        input[type=submit] {
            width: 25%;
            background-color: #4CAF50;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        input[type=submit]:hover {
            background-color: #45a049;
        }

        br {
            display: block;
            line-height: 1.6em;
        }

        article, aside, details, figcaption, figure, footer, header, hgroup, menu, nav, section {
            display: block;
        }

        ol, ul {
            list-style: none;
        }

        input, textarea {
            -webkit-font-smoothing: antialiased;
            -webkit-text-size-adjust: 100%;
            -ms-text-size-adjust: 100%;
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
            outline: none;
        }

        blockquote, q {
            quotes: none;
        }

        blockquote:before, blockquote:after, q:before, q:after {
            content: '';
            content: none;
        }

        strong, b {
            font-weight: bold;
        }

        table {
            border-collapse: collapse;
            border-spacing: 0;
        }

        img {
            border: 0;
            max-width: 100%;
        }


        /** page structure **/
        #wrapper {
            display: block;
            width: 850px;
            background: #fff;
            margin: 0 auto;
            padding: 10px 17px;
            -webkit-box-shadow: 2px 2px 3px -1px rgba(0, 0, 0, 0.35);
        }

        #keywords {
            margin: 0 auto;
            font-size: 1.2em;
            margin-bottom: 15px;
        }


        #keywords thead {
            cursor: pointer;
            background: #c9dff0;
        }

        #keywords thead tr th {
            font-weight: bold;
            padding: 12px 30px;
            padding-left: 42px;
        }

        #keywords thead tr th span {
            padding-right: 20px;
            background-repeat: no-repeat;
            background-position: 100% 100%;
        }

        #keywords thead tr th.headerSortUp, #keywords thead tr th.headerSortDown {
            background: #acc8dd;
        }

        #keywords thead tr th.headerSortUp span {
            background-image: url('https://i.imgur.com/SP99ZPJ.png');
        }

        #keywords thead tr th.headerSortDown span {
            background-image: url('https://i.imgur.com/RkA9MBo.png');
        }


        #keywords tbody tr {
            color: #555;
        }

        #keywords tbody tr td {
            text-align: center;
            padding: 15px 10px;
        }

        #keywords tbody tr td.lalign {
            text-align: left;
        }
        a{
            text-decoration: none;
        }
    </style>
</head>
<body>
<h1 style="text-align: center">Page des utilisateurs</h1>

<div class="box">
    <div class="form">
        <h1 class="text-header"><?php if (empty($user)) {
                echo "Ajouter";
            } ?>
            <?php if (!empty($user)) {
                echo "Modifier";
            } ?> un utilisateur</h1>
        <div class="div-form">
            <form action="user" method="post">
                <label>Prénom</label>
                <input type="text" name="firstname" placeholder="Prénom.." value=<?php if (!empty($user)) {
                    echo $user->firstname;
                } ?>>

                <label>Nom</label>
                <input type="text" name="lastname" placeholder="Nom.." value=<?php if (!empty($user)) {
                    echo $user->lastname;
                } ?>>

                <label>Nom d'utilisateur</label>
                <input type="text" name="username" placeholder="Nom d'utilisateur.." value=<?php if (!empty($user)) {
                    echo $user->username;
                } ?>>


                <label>Mot de passe</label>
                <input type="password" name="password" placeholder="Mot de passe..">

                <input type="submit" value="Ajouter">
            </form>
        </div>
    </div>
    <div class="table">
        <h1 class="text-header">Liste des utilisateurs</h1>
        <?php if (!empty($users)): ?>
            <table id="keywords">
                <thead>
                <tr>
                    <th><span>Prénom</span></th>
                    <th><span>Nom</span></th>
                    <th><span>Nom d'utilisateur</span></th>
                    <th colspan="2"><span>Actions</span></th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($users as $user): ?>
                    <tr>
                        <td class="lalign"><?= $user->firstname ?></td>
                        <td><?= $user->lastname ?></td>
                        <td><?= $user->username ?></td>
                        <td style="color: #477ca4"><a href="/user/<?= $user->id ?>/update">Modifier</a></td>
                        <td style="color: #e14141"><a href="/user/<?= $user->id ?>/delete">Supprimer</a></td>
                    </tr>
                <?php endforeach ?>
                </tbody>

            </table>
        <?php else: ?>
            <div class="message">Aucun utilisateur trouvé</div>
        <?php endif ?>

    </div>
</div>
<div></div>
<div></div>
</body>
</html>