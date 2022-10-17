<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>operadores relacionais</title>
</head>
<body>
    <?php 
    
    /* Exercicio 005
    Permitir que o usuário escolha 
    entre somar e multiplicar dois números.
    */
    $n1 = $_GET["n1"];
    $n2 = $_GET["n2"];
    $esc = $_GET["op"];
    echo "Se quiser que somar informe na URL: s. Se quiser multiplicar informe na URL: m";
    echo "<br>N1: $n1 e N2: $n2, a sua escolha foi $esc";
    $res = ($esc == 's')?$n1+$n2:$n1*$n2;
    echo "<br>Portanto, o resultado foi: $res";
    ?>
</body>
</html>