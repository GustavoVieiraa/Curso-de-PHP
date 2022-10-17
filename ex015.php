<!DOCTYPE html>
<html lang="pt-br">
<head>
    <?php 
    $n = isset($_GET["num"])?$_GET["num"]:"Informe o valor na tela anterior.";
    $esc = isset($_GET["operando"])?$_GET["operando"]:"Escolha o operador na tela anterior.";
    
    ?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado dos valores</title>
</head>
<body>
    
    <?php 
    
    switch ($esc) { # todos os casos dentro dessa estrutura vai levar em conta o valor/variavel passando no inicio.
        case 1:
            $r = sqrt($n); ### $r = $n ^ (1/2);
            break;
        case 2:
            $r = $n * 2;
            break;
        case 3:
            $r = pow($n, 3);
            break;
    }
    echo "<h2>O resultado é $r</h2>";
    ?>
    <br>
    <a href="ex015.html">Voltar</a>
</body>
</html>