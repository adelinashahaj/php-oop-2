<?php
require_once __DIR__ . '/Models/Categoria.php';
require_once __DIR__ . '/Models/Prodotto.php';
require_once __DIR__ . '/Models/Cibo.php';
require_once __DIR__ . '/Models/Giochi.php';
require_once __DIR__ . '/Models/Accessori.php';

$gatto = new Categoria ('<i class="fa-solid fa-cat"></i>');
$cane = new Categoria ('<i class="fa-solid fa-dog"></i>');


$cuccia = new Accessori('Collare', 40, 'img/animal.shop.jpg', 500,'Product', $cane);
$crocchette = new Cibo('Crocchette ', 7, 'img/animal.shop.jpg', 300, 'Food', $gatto);
$palla = new Giochi('Palla da tennis', 10, 'img/animal.shop.jpg', 'Plastica', 'Game',$cane );

$prodotto = [
    $cuccia,
    $crocchette,
    $palla,
];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Boolshop</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body class="bg-success-subtle">
<div class="container d-flex justify-content-around my-5">
    <?php foreach ($prodotto as $prodotti) :?>
        <div class="card" style="width: 18rem;">
            <?php
            echo $palla->getimg();
            ?>
            <div class="card-body">
                <?php
                echo $prodotti->getFullData();
                echo $prodotti->getData();
                echo $prodotti->getCategoria();
                echo $prodotti->gettype();
                ?>
            </div>
        </div>
        <?php endforeach; ?>

    </div>

</body>

</html>