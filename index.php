<?php
include __DIR__ . '/db.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movies</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
<header>
    <?php include __DIR__ . '/components/header.php'; ?>
</header>
<main>
    <!-- section movies -->
    <section> 
        <?php include __DIR__ . '/components/moviesTable.php'; ?>
    </section>
    <!-- section series -->
    <section>
        <?php include __DIR__ . '/components/tvSeriesTable.php'; ?>
    </section>
</main>
</body>
</html>