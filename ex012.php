<!DOCTYPE html>
<html lang="pt-br">
<head>
    <?php 
    $ano_nasc = isset($_GET["anonasc"])?($_GET["anonasc"]):"[aguardando a idade]";
    $ano_atual = date("Y"); # date("Y") é uma função que nós trás o ano atual
    $idade = ($ano_atual-$ano_nasc);
    ?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verificado se pode dirigir e votar</title>
</head>
<body>

    <?php
    
    if ($idade >= 18) {
        $v = "PODE VOTAR";
        $d = "PODE DIRIGIR";
    }
    else {
        $v = "NÃO PODE VOTAR";
        $d = "NÃO PODE DIRIGIR";
    }
    
    echo "com a idade de $idade anos, $v e $d";

    ?>
    <br>
    <a href="ex012.html">Retornar</a>
</body>
</html>