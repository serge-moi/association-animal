<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="../../bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../css/main.css">
</head>
<body>
    <!-- on peut avoir un container plus grand avec container-fluid -->
    <div class="container p-0 mt-2 rounded perso_shadow">
        <header class="bg-dark text-white rounded-top perso_policeTitre perso_shadow">
            <div class="row align-items-center m-0">
                <div class="col-2 p-2 text-center">
                    <a href="index.php">
                        <!-- img-fluid permet de redimensionner automatiquement la taille de l'image quand on réduit la taille de l'écran -->
                        <img class="rounded-circle img-fluid perso_logoSize" src="../../sources/images/Autres/logoNANA2.jpg" alt="logo du site">
                    </a>
                </div>
                <div class="col-8 m-0 p-0">
                    <?php require("../Commons/menu.php") ?>
                </div>
                <!-- je mets la div en d-none pour la cacher et je mets d-lg-block pour qu'elle passe en block quand elle est en plein écran -->
                <div class="col-2 text-right pt-1 pr-4 d-none d-lg-block">
                    N.A.N.A <br> Clermont (09)
                </div>
            </div>
        </header>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="../../bootstrap/js/bootstrap.js"></script>
</body>
</html>