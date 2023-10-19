<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Minha primeira página com PHP</h1>

    <?php echo "Minha string vinda do PHP"; ?>

    <p>Estou no curso de <?php echo "PHP"; ?></p>

    <p>Estou no curso de <?= "PHP"; ?></p>

    <p>10 mais 10 é igual a <?php echo 10 + 10; ?></p>

    <p>10 mais 10 é igual a <?= 10 + 10; ?></p>

    <?php
        echo "minha linha 1 <br>";

        echo "minha linha 2 <br>";

        echo "minha linha 3";
    ?>
</body>
</html>

<!-- RESULTADO - SAÍDA

    Minha primeira página com PHP
    Minha string vinda do PHP
    Estou no curso de PHP

    Estou no curso de PHP

    10 mais 10 é igual a 20

    10 mais 10 é igual a 20

    minha linha 1
    minha linha 2
    minha linha 3
    
-->