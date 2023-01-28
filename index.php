<?php require_once 'includes/dbconnect.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Autocompletion</title>
    <script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="assets/css/style.css">

</head>
<body>
    <?php require_once 'includes/header.php'; ?>

    <h1>les principaux conifères de Provence</h1>

    <form>
        <input type="text" id="search-input-index" name="searchInput" placeholder="Rechercher un arbre">
        <input type="submit" value="Rechercher">
        <select id="result-selector"></select>
    </form>

    <div id="result"></div>

    <script src="assets/js/script.js"></script>
</body>
</html>