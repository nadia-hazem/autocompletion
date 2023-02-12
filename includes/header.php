<!DOCTYPE html>
<html lang="en">

<head>

    <!-- Required meta tags -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <!-- Fontawesome kit -->
    <script src="https://kit.fontawesome.com/a05ac89949.js" crossorigin="anonymous"></script>
    
    <!-- CSS style -->
    <link rel="stylesheet" href="assets/css/style.css">

    <!-- JS script -->
    <script type="text/javascript" src="script.js"></script>

    <!-- favicon -->
    <link rel="shortcut icon" type="image/png" href="/autocompletion/assets/img/favicon.png"/>    

    <title><?= $title ?></title>

</head>

<body class="d-flex flex-column min-vh-100">

    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid justify-content-between">
                <img src="assets/img/tree.svg" alt="logo" width="30" height="24" class="d-inline-block align-text-top">
                <a class="navbar-brand pl-5" href="index.php">Les arbres de Provence</a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarmobile" aria-controls="navbarmobile" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarmobile">
                    <ul class="navbar-nav ml-3">
                        <li class="nav-item">
                            <a class="nav-link active" href="index.php"><i class="fas fa-home"></i> Accueil</a>
                                <?php if ($title == "Accueil") {
                                    echo '<span class="visually-hidden">(current)</span>';
                                } ?>
                            </a>
                        </li>
                    </ul>                    
                </div>

                <!-- Section Social media -->
                <section class="m-1">

                    <!-- Linkedin -->
                    <a class="btn btn-outline-light btn-floating align-middle" href="https://www.linkedin.com/in/pictelle/" target="_blank" role="button" title="Mon LinkedIn"><i class="fab fa-linkedin-in"></i></a>

                    <!-- Github -->
                    <a class="btn btn-outline-light btn-floating align-middle" href="https://github.com/nadia-hazem" target="_blank" role="button" title="Mon GitHub"><i class="fab fa-github"></i></a>

                    <!-- Wordpress -->
                    <a class="btn btn-outline-light btn-floating align-middle" href="https://pictelle.com" target="_blank" role="button"><i class="fab fa-wordpress" title="Mon WordPress"></i></a>

                    <!-- Resume -->
                    <a class="btn btn-outline-light btn-floating align-middle" href="https://nadia-hazem.students-laplateforme.io/" target="_blank" role="button" title="CV/Resume"><i class="fas fa-file"></i></a>

                </section>
                <!-- /Section Social media -->
            </div>
        </nav>
    </header>
    
    <?php if ($title !== "Accueil") : ?>
        <div class="row justify-content-center align-items-center">
            <div class="col-md-6 mt-5">
                <div>
                    <form class="d-flex " method="get" action="recherche.php">
                        <input class="form-control me-sm-2" type="text" id="search" name="search" placeholder="Rechercher">
                        <button class="btn btn-secondary my-2 my-sm-0" type="submit"><i class="fas fa-search"></i></button>
                    </form>

                    <ul id="matchList"></ul>
                    <ul id="matchList2"></ul>
                </div>
            </div>
        </div>
    <?php endif; ?>

