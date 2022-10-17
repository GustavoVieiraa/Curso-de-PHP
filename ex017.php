<!DOCTYPE html>
<html lang="pt-br">
<head>
    <?php 
    $est = isset($_GET["estado"])?$_GET["estado"]:"Informe o estado!";
    ?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verificado o seu estado!</title>
</head>
<body>

    <?php
    
    switch ($est) {
        case 1:
        case 2:
        case 3:
        case 4:
        case 5:
        case 6:
        case 7:
            echo "<h2>Você mora na região NORTE!</h2>";
            break;
        case 8:
        case 9:
        case 10:
        case 11:
        case 12:
        case 13:
        case 14:
        case 15:
        case 16:
            echo "<h2>Você mora na região NORDESTE!</h2>";
            break;
        case 17:
        case 18:
        case 19:
            echo "<h2>Você mora na região CENTRO-OESTE!</h2>";
            break;
        case 20:
        case 21:
        case 22:
        case 23:
            echo "<h2>Você mora na região SUDESTE!</h2>";
            break;
        case 24:
        case 25:
        case 26:
            echo "<h2>Você mora na região SUL!</h2>";
            break;
    }

    ?>

    <a href="ex017.html">Voltar</a>
</body>
</html>