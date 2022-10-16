<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 06 - Operadores de Atribuição</title>
</head>
<body>
    <?php 
    $a = 1;
    $b = 4;
    $preco_prod = $_GET["p"];
    $val_aumento = (($preco_prod*10)/100);
    $val_final = $preco_prod + $val_aumento;
    echo "<h1>Preço Produto: R$".number_format($preco_prod, 2)."</h1>";
    echo "<h1> Valor de Aumento: R$".number_format($val_aumento, 2)."</h1>";
    echo "<h1> Valor produto final: R$".number_format($val_final, 2)."</h1>";

    /* operadores de atribuição */
    // $a += $b;
    // $b += $a;
    // $a += 1 ou $a++; 

    /**
     * Adição - $a = $a + $b                | $a += $b
     * Subtração - $a = $a - $b             | $a -= $b
     * Multiplicação - $a = $a * $b         | $a *= $b
     * Divisão - $a = $a / $b               | $a /= $b
     * Módulo - $a = $a % $b                | $a %= $b
     * Concatenação - $a = $a . $b          | $a .= $b
     */
    


    ?>
</body>
</html>