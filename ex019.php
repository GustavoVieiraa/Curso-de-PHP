<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Entradas de valores com a estrutura While</title>
</head>
<body>
    <form method="get" action="ex019resultado.php"> <legend>Informe os valores</legend>
        <?php 
        $c = 1;
        while ($c <= 5) {
            echo "<label for='lbnum'>Valor $c: </label>";
            echo "<input type='number' name='num$c' id='lbnum' max='100' min='0'> <br>"; 
            $c++;
        }
        echo "<input type='submit' value='receber valor'><br>"
        ?>
    </form>
</body>
</html>