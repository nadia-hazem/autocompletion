<?php

require_once('./assets/php/db.php');

$search = htmlspecialchars($_GET['search']);

$query = $conn->prepare("SELECT * FROM `arbres` WHERE vernaculaire = :search;");
$query->execute([':search' => $search]);
$result = $query->fetchAll(PDO::FETCH_ASSOC);

$title = $result[0]['vernaculaire'];

require_once 'includes/header.php';

?>
<main class="container mt-5">
    <section class="row">
        <div class="col-md-6 m-auto">

            <div class="card mx-auto my-auto" style="max-width: 40rem;">
                <div class="card-header">Arbre :</div>
                <div class="card-body">
                    <h4 class="card-title text-center"><?= $result[0]['vernaculaire'] ?></h4>
                    <h3 class="card-text text-center mb-3"><?= $result[0]['latin'] ?></h3>
                    <table>
                        <tbody>
                            <tr>
                                <th scope="row ">Famille</th>
                                <td class="text-right"><?= $result[0]['famille'] ?></td>
                            </tr>
                            <tr>
                                <th scope="row">Origine</td>
                                <td class="text-right"><?= $result[0]['origine'] ?></td>
                            </tr>
                            <tr>
                                <th scope="row">Hauteur</td>
                                <td class="text-right"><?= $result[0]['hauteur'] ?> mètres</td>
                            </tr>
                            <tr>
                                <th scope="row">Longévité</td>
                                <td class="text-right"><?= $result[0]['longevite'] ?></td>
                            </tr>
                            <tr>
                                <th scope="row">Feuilles</td>
                                <td class="text-right"><?= $result[0]['feuille'] ?></td>
                            </tr>
                            <tr>
                                <th scope="row">Sol</td>
                                <td class="text-right"><?= $result[0]['sol'] ?></td>
                            </tr>
                            <tr>
                                <th scope="row">Fruit</td>
                                <td class="text-right"><?= $result[0]['fruit'] ?></td>
                            </tr>
                            <tr>
                                <th scope="row">Taille</td>
                                <td class="text-right"><?= $result[0]['taille'] ?></td>
                            </tr>
                            <tr>
                                <th scope="row">Infos</td>
                                <td class="text-right"><?= $result[0]['info'] ?></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
</main>
</body>

</html>