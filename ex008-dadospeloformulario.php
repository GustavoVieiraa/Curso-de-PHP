<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>dados por formulario</title>
</head>
<body>
    <form method="GET" action="ex008-dadospeloformulario.php">
    <p>Informe dois números para realizar uma soma:</p>
    <p>N1: <input type="text" name="n1" required/></p>
    <p>N2: <input type="text" name="n2" required/></p>
        <input type="submit" value="Calcular">
    <?php
    $nota1 = $_GET["n1"];
    $nota2 = $_GET["n2"];
    $s = $nota1+$nota2;
    echo "<br>Resultado da soma entre $nota1 e $nota2 é $s";
    ?>
    </form>
</body>
</html>