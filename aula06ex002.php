<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 002</title>
</head>
<body>
    <?php 
    
    $ano_atual = $_GET['aa'];

    /* operadores de Incremento
     * Pré-incremento - $a = $a + 1 podemos utilizar ++$a 
     * Pós-incremento - $a = $a + 1 podemos utilizar $a++
     * Pré-decremento - $a = $a - 1 podemos utilizar --$a
     * Pós-decremento - $a = $a - 1 podemos utilizar $a--
     */
    
    echo "<h2>Ano atual: $ano_atual</h2>";
    $ano_atual--;
    echo "<h2>Ano anterior: $ano_atual";
    
    ?>
</body>
</html>