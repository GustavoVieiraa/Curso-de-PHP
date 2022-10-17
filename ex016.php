<!DOCTYPE html>
<html lang="pt-br">
<head>
    <?php 
    
    $dia = isset($_GET["diasem"])?$_GET["diasem"]:"Informe o dia da semana!";
    
    ?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dia verificado!</title>
</head>
<body>

    <?php 
    
    switch ($dia) {
        case 2:
        case 3:
        case 4:
        case 5: 
        case 6:
            echo "<h2>hoje, INFELIZMENTE você precisa ir para ESCOLA!</h2>";
            break;
        case 1:
        case 7:
            echo "<h2>hoje, FELIZMENTEEEEEE você não precisa ir para escola</h2>";
    }
    
    ?>
    <br>
    <a href="ex016.html">Voltar</a>
</body>
</html>