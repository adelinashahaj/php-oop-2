<?php
require_once __DIR__ . '/Models/Categoria.php';
require_once __DIR__ . '/Models/Prodotto.php';
require_once __DIR__ . '/Models/Cibo.php';
require_once __DIR__ . '/Models/Giochi.php';

$prodotto1 = new Prodotti('Collare', 'cane', 20.99);
$prodotto2 = new Prodotti('Palla da tennis', 'gatto', 10.99);
$prodotto3 = new Cibo('Crocchette 1kg', 'cane', 40.50);
$prodotto3->set_ingredienti('prosciutto', 'riso');


$prodotti = [
    $prodotto1,
    $prodotto2,
    $prodotto3,
];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- collegamento al framework bootstrap via CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Boolshop</title>
</head>

<body>
    <div class="container">
        <h1>Negozio per animali</h1>

        <div class="row">
            <?php foreach ($prodotti as $prodotto) : ?>
                <div class="col-12 col-md-3">
                    <div class="card">
                        <img src="img/animal.shop.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $prodotto->get_nomeProdotto(); ?></h5>
                            <p class="card-text"><?php echo $prodotto->get_animale(); ?></p>
                            <?php if (method_exists($prodotto, 'get_ingredienti')) : ?>
                                <p class="card-text">ingredienti: <?php echo $prodotto->get_ingredienti(); ?></p>
                            <?php endif; ?>
                            <p class="card-text">Prezzo:€ <?php echo $prodotto->get_prezzo(); ?></p>
                            
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>

</body>

</html>