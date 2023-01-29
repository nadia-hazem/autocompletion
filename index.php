<?php
$title = "Accueil";

require_once 'includes/header.php';
?>

    <main class="min-vh-100 mb-5">
        <section class="row justify-content-center align-items-center">

            <div class="col-md-6 mt-5">
                
                <h1 class="text-center text-white mb-3">Les arbres de Provence</h1>

                <form class="d-flex" method="get" action="recherche.php">
                    <input id="search" class="form-control me-sm-2" type="text" name="search" placeholder="Rechercher...">
                    
                    <button class="btn btn-secondary my-2 my-sm-0" type="submit"><i class="fas fa-search"></i></button>
                </form>

                <ul id="matchList"></ul>
                <ul id="matchList2"></ul>

            </div>
        </section>

        <section class="row rounded border-secondary shadow w-50 blueimg m-auto pt-3 justify-content-center align-items-start">
            <ul class="text-left col-lg-3 col-md-3 col-sm-12 p-2">
                <li>Arbre de Judée</li>
                <li>Arbre aux milles écus</li>
                <li>Marronnier d'Inde</li>
                <li>Orme champêtre</li>
                <li>Micocoulier</li>
                <li>Pistachier</li>
                <li>Cormier</li>
            </ul>
            <ul class="text-left col-lg-3 col-md-3 col-sm-12 p-2">
                <li>Erable champêtre</li>
                <li>Faux vernis du Japan</li>
                <li>Mimosas de Paris</li>
                <li>Arbre à perruques</li>
                <li>Sureau noir</li>
                <li>Robinier</li>
                <li>Chêne pubescent</li>
            </ul>
            <ul class="text-left col-lg-3 col-md-3 col-sm-12 p-2">
                <li>Lilas des Indes</li>
                <li>Cerisier</li>
                <li>Mûrier</li>
                <li>Tamaris</li>
                <li>Prunier de Pissard</li>
                <li>Figuier de Caries</li>
            </ul>
        </section>

    </main>

    <?php
    require_once 'includes/footer.php';
    ?>
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
    <!-- JS script -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>