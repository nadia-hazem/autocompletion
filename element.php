<?php

require_once('./assets/php/db.php');

$search = htmlspecialchars($_GET['search']);

$query = $conn->prepare("SELECT * FROM `arbres` WHERE vernaculaire = :search;");
$query->execute([':search' => $search]);
$result = $query->fetchAll(PDO::FETCH_ASSOC);

$title = $result[0]['vernaculaire'];

require_once 'includes/header.php';

?>
    <main class="main h-100 mb-5">
        <section class="row">
            <div class="col-md-6 mx-auto">
                <div class="card mx-auto" style="max-width: 50rem;">
                    <div class="card-header">Arbre :</div>
                    <div class="card-body bg-herb">
                        <h4 class="card-title text-center"><?= $result[0]['vernaculaire'] ?></h4>
                        <h3 class="card-text text-center mb-3"><?= $result[0]['latin'] ?></h3>
                        <table>
                            <tbody>
                                <tr>
                                    <th scope="row" class="col-3 pb-2"><i class="fas fa-tree"></i>Famille</th>
                                    <td class="text-right col-9 pb-2"><?= $result[0]['famille'] ?></td>
                                </tr>
                                <tr>
                                    <th scope="row" class="col-3 pb-2"><i class="fas fa-globe"></i>Origine</td>
                                    <td class="text-right col-9 pb-2"><?= $result[0]['origine'] ?></td>
                                </tr>
                                <tr>
                                    <th scope="row" class="col-3 pb-2"><i class="fas fa-arrow-up"></i>Hauteur</td>
                                    <td class="text-right col-9 pb-2"><?= $result[0]['hauteur'] ?> mètres</td>
                                </tr>
                                <tr>
                                    <th scope="row" class="col-3 pb-2"><i class="fas fa-infinity"></i>Longévité</td>
                                    <td class="text-right col-9 pb-2"><?= $result[0]['longevite'] ?> ans</td>
                                </tr>
                                <tr>
                                    <th scope="row" class="col-3 pb-2"><i class="fas fa-leaf"></i>Feuilles</td>
                                    <td class="text-right col-9 pb-2"><?= $result[0]['feuille'] ?></td>
                                </tr>
                                <tr>
                                    <th scope="row" class="col-3 pb-2"><i class="fas fa-layer-group"></i>Sol</td>
                                    <td class="text-right col-9 pb-2"><?= $result[0]['sol'] ?></td>
                                </tr>
                                <tr>
                                    <th scope="row" class="col-3 pb-2"><i class="fa fa-lemon"></i>Fruit</td>
                                    <td class="text-right col-9 pb-2"><?= $result[0]['fruit'] ?></td>
                                </tr>
                                <tr>
                                    <th scope="row" class="col-3 pb-2"><i class="fa fa-scissors"></i>Taille</td>
                                    <td class="text-right col-9 pb-2"><?= $result[0]['taille'] ?></td>
                                </tr>
                                <tr>
                                    <th scope="row" class="col-3 pb-2"><i class="fas fa-info"></i>Infos</td>
                                    <td class="text-right col-9 pb-2"><?= $result[0]['info'] ?></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <?php require_once 'includes/footer.php'; ?>

</body>

</html>