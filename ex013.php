<!DOCTYPE html>
<html lang="pt-br">
<head>
    <?php 
    $ano_nasc = isset($_GET["anonasc"])?$_GET["anonasc"]:"[INFORME UMA IDADE]";
    $idade = date("Y") - $ano_nasc;
    ?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verificado!</title>
</head>
<body>
    <?php 
    echo "<h1>IDADE: $idade</h1> <br>";
    if ($idade <= 16) {
        $v = "Você NÃO pode VOTAR!";
        $d = "Você NÃO pode DIRIGIR!";
    } 
    else if ($idade >= 16 && $idade < 18) {
        $v = "Seu voto é OPCIONAL!";
        $d = "Você NÃO pode DIRIGIR ainda!";
    }
    else if ($idade >= 65) {
        $v = "Seu voto é OPCIONAL!";
        $d = "Você pode DIRIGIR;";
    }
    else {
            $v = "Seu voto é OBRIGATORIO!";
            $d = "Você pode DIRIGIR!";
    }

    echo "Status VOTO: $v <br> Status DIRIGIR: $d";

    ?>
    <br>
    <a href="ex013.html">Voltar</a>
</body>
</html>