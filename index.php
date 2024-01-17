<?php 

    require_once __DIR__ . '/Models/prodotti.php';
    require_once __DIR__ . '/dates.php'

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>e-commerce</title>
</head>
<body>
    <h1>e-commerce</h1>
    <div>
        <h2>prodotti</h2>
        <div>
            <?php foreach ($prodotti as $prodotto):?>
                <div>
                    <h1> prodotto </h1>
                    <?php echo $prodotto->name ?>
                    <br>
                    <br>
                    <br>
                    <?php echo $prodotto->Getprodotto() ?>

                </div>
            <?php endforeach ?>
        </div>
    </div>
</body>
</html>