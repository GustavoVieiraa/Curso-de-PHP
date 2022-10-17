<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contagem até 10</title>
</head>
<body>
    <?php 
    $c = 10;
    while ($c>=0) {
        echo "$c ";
        $c -= 2; # operador de incremento
    }
    
    ?>
</body>
</html>