<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado dos valores PHP</title>
</head>
<body>
    <?php 
    $c = 1;
    while ($c <= 5) {
        $numresult = isset($_GET["num$c"])?$_GET["num$c"]:'Informe o número';
        echo "Valor $c: $numresult <br>";
        $c++;
    }
    
    ?>
</body>
</html>