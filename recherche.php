<?php

require_once('./assets/php/db.php');

$search =  htmlspecialchars($_GET['search']) . "%";

$query = $conn->prepare("SELECT vernaculaire, latin, famille FROM arbres WHERE vernaculaire LIKE :search OR latin LIKE :search OR famille LIKE :search LIMIT 0,20;");
$query->execute([':search' => $search]);
$result = $query->fetchAll(PDO::FETCH_ASSOC);
// var_dump($result);die;

$title = "Recherche : " . htmlspecialchars($_GET['search']);

require_once 'includes/header.php';
?>

<main class="container mt-5">
    <section class="row">

        <div class="col-md-6 m-auto">

            <h3 class="text-center mb-3">Votre recherche</h3>

            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">Arbres</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 

                        foreach ($result as $arbre) {
                            
                            echo "<tr>
                                <th scope='row'><a href='element.php?search=" . $arbre['vernaculaire'] . "'>" . $arbre['latin'] . $arbre['famille'] . "</a></th>
                            </tr>";
                        }
                    ?>
                </tbody>

        </div>

    </section>
</main>

</body>

</html>