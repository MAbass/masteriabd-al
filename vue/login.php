<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/js/bootstrap.bundle.min.js">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/vue@2.6.12/dist/vue.js">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <title>Connexion</title>
    <style>
        /*
        body {
            background: #000;
        }
        */

        .card {
            border: none;
            height: 320px;
        }

        .forms-inputs {
            position: relative;
        }

        .forms-inputs span {
            position: absolute;
            top: -18px;
            left: 10px;
            background-color: #fff;
            padding: 5px 10px;
            font-size: 15px;
        }

        .forms-inputs input {
            height: 50px;
            border: 2px solid #eee;
        }

        .forms-inputs input:focus {
            box-shadow: none;
            outline: none;
            border: 2px solid #000;
        }

        .btn {
            height: 50px;
        }

        input {
            min-width: 100%;
        }

    </style>
</head>

<body>
<div class="container mt-5">
    <div class="row d-flex justify-content-center">
        <div class="col-md-6">
            <form method="post" action="login">
                <div class="card px-5 py-5" id="form1">
                    <div class="form-data">
                        <h5 style="color: red;margin-bottom: 50px">
                            <?php
                            if (!empty($error)) {
                                echo $error;
                            }
                            ?>
                        </h5>
                        <div class="forms-inputs mb-4">
                            <span>Nom d'utilisateur</span>
                            <input type="text" name="username">
                        </div>
                        <div class="forms-inputs mb-4">
                            <span>Mot de passe</span>
                            <input type="password" name="password">
                        </div>
                        <div class="mb-3">
                            <input class="btn btn-dark w-100" type="submit" value="Se connecter"/>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
</body>

</html>