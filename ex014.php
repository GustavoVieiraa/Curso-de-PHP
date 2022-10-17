<!DOCTYPE html>
<html lang="pt-br">
<head>
    <?php 
    $nota1 = isset($_GET["n1"])?$_GET["n1"]:"Informe a NOTA1";
    $nota2 = isset($_GET["n2"])?$_GET["n2"]:"Informe a NOTA2";
    $m = (($nota1+$nota2)/2);
    ?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculo executado!</title>
    <style>
        
    </style>
</head>
<body>
    <?php 
    
    echo "<h2>Suas notas foram: $nota1 e $nota2</h2> <br>";
    
    if (($m > 0) && ($m < 5)) {
        echo "Com as notas $nota1 e $nota2 sua média foi $m | você foi REPROVADO!";
    }
    else if (($m >= 5) && ($m < 7)) {
        echo "Com as notas $nota1 e $nota2 sua média foi $m | você está de RECUPERAÇÃO!";
    }
    else if (($m >= 7) && ($m <= 10)) {
        echo "Com as notas $nota1 e $nota2 sua média foi $m | você foi APROVADO!!!";
    }
    else {
        echo "Valor informado INVALIDO, tente novamente!";
    }
    ?>
    <a href="ex014.html">Voltar</a>
</body>
</html>