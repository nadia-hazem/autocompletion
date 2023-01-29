<?php
$title = "Accueil";

require_once 'includes/header.php';
?>

<main class="container mt-5">
    <section class="row">

        <div class="col-md-6 m-auto">
            
            <h3 class="text-center mb-3">Les arbres de Provence</h3>

            <form class="d-flex" method="get" action="recherche.php">
                <input id="search" class="form-control mx-sm-2" type="text" name="search" placeholder="Rechercher...">
                <button class="btn btn-secondary my-2 my-sm-0" type="submit"><i class="fas fa-search"></i></button>
            </form>
            
            <ul id="matchList"></ul>
            <ul id="matchList2"></ul>

        </div>

    </section>
</main>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
    <!-- JS script -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>