<?php
include __DIR__ . '../models/db.php';
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
    <?php include __DIR__ . '/header.php'; ?>
</header>
<main>
    <div class="container my-5">
        <div class="row">
            <table class="table">
                <thead>
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">Title</th>
                    <th scope="col">Language avaible</th>
                    <th scope="col">Vote</th>
                    </tr>
                </thead>
                <tbody>
                    <?php for ($i = 0; $i < count($movies); $i++) { ?>
                    <tr>
                    <th scope="row"><?php echo $i+1; ?></th>
                    <td><?php echo $movies[$i]->title ?></td>
                    <td><?php echo $movies[$i]->language ?></td>
                    <td><?php echo $movies[$i]->vote ?>/10</td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</main>


</body>
</html>