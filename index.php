<?php
require_once __DIR__ . '/Models/Categoria.php';
require_once __DIR__ . '/Models/Prodotto.php';
require_once __DIR__ . '/Models/Cibo.php';
require_once __DIR__ . '/Models/Giochi.php';
require_once __DIR__ . '/Models/Accessori.php';



$gatto = new Categoria ('<i class="fa-solid fa-cat"></i>');
$cane = new Categoria ('<i class="fa-solid fa-dog"></i>');


$cuccia = new Accessori('Collare', 40, 'img/animal.shop.jpg', $cane);
$cuccia->setpeso(100);
$crocchette = new Cibo('Crocchette ', 7, 'img/animal.shop.jpg', 300,  $gatto);
$crocchette->setpeso(200);
$palla = new Giochi('Palla da tennis', 10, 'img/animal.shop.jpg', 'Plastica', $cane );
$palla->setpeso(200);

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
    <title>Boolshop</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body class="bg-success-subtle">
<div class="container d-flex justify-content-around my-5">
    <?php foreach ($prodotto as $prodotti) :?>
        <div class="card" style="width: 18rem;">
            <?php
            echo $palla->getimg();
            echo $prodotti->getCategoria();
            ?>
            <div class="card-body">
                <?php
                echo $prodotti->getFullData();
                echo  $prodotti->getpeso();
                echo  $prodotti->getClassName();
                if ($prodotti->getClassName() == 'Giochi') {
                     echo '<br/> <span class=" text-primary">Materiale: </span>' .$prodotti->materiale;
                }else if  ($prodotti->getClassName() == 'Cibo') {
                      echo '<br/><span class=" text-primary">Calorie: </span>' . $prodotti->calorie;
                }

                
                try {
                    echo $prodotti->calcAnno('2020');
                } catch (Exception $e) {
                    
                    echo "Si è verificato un errore: " . $e->getMessage();
                }
                
              
               
                ?>
            </div>
        </div>
        <?php endforeach; ?>

    </div>

</body>

</html>