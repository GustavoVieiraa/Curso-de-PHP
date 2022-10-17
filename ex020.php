<!DOCTYPE html>
<html lang="pt-br">
<head>
    <?php 
    
    $i = isset($_GET["n_inicio"])?$_GET["n_inicio"]:"Informe o INICIO!";
    $f = isset($_GET["n_final"])?$_GET["n_final"]:"Informe o FIM!";
    $int = isset($_GET["inc"])?$_GET["inc"]:"Informe o INCREMENTO!";
    
    ?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contagem Realizada!</title>
</head>
<body>
    <?php
    if ($i > $f) {
        while ($i >= $f) {
            echo "$i ";
            $i -= $int;
        }
    }
    else if ($i < $f) {
        while ($i <= $f) {
            echo "$i ";
            $i += $int;
        }
    }
    ?>

    <a href="ex020.html">voltar</a>

</body>
</html>