<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Raiz Quadrada</title>
</head>
<body>
    <p>Informe um valor para verificar sua Raiz Quadrada:</p>
    <form method="GET" action="ex009-raizquadrada.php">
        Número: <input type="number" name="num" required>
        <input type="submit" value="verificar">
        <?php
            $num = $_GET["num"];
            $quad = sqrt($num);
            echo "A raiz quadrada de $num é ".number_format($quad, 2);
        ?>
    </form>
</body>
</html>