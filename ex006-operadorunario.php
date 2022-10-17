<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ex 006 - Média e verificação de aprovação</title>
</head>
<body>
    <?php
    $nota1 = $_GET["n1"];
    $nota2 = $_GET["n2"];
    $m = ($nota1+$nota2)/2;
    echo "<h1>Com as notas $nota1 e $nota2 a sua média foi $m</h1> <br>";
    $r = $m>=7?"APROVADO!":"REPROVADO!"; # esse é um exemplo de operador unário
    echo "<h1>Você foi $r</h1>";
    ?>
</body>
</html>