<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores aritmeticos</title>
</head>
<body>
    <?php 
    
    // Como fazer operações aritméticas com PHP?
    $n1 = $_GET["a"];
    $n2 = $_GET["b"];
    $m = (($n1+$n2)/2);
    echo "<h1>A média entre $n1 e $n2 é $m</h1>";
    echo "<h1>A soma entre $n1 e $n2 é igual: ".($n1+$n2)."</h1>";
    echo "<h1>A divisão entre $n1 e $n2 é igual: ".($n1/$n2)."</h1>";
    echo "<h1>A multiplicação entre $n1 e $n2 é igual: ".($n1*$n2)."</h1>";
    echo "<h1>A subtração entre $n1 e $n2 é igual: ".($n1-$n2)."</h1>";
    echo "<h1>O modulo da divisão entre $n1 e $n2 é igual: ".($n1%$n2)."</h1>";
    
    // Ordem de Precedência
    /* Sempre da Esquerda < para Direita >.
        * Parênteses ()
        * Multiplicação *, Divisão / e Módulo %.
        * Adição + e Subtração - 
    */

    // Funções Matemáticas
    /*
        * abs() - Valor absoluto
        * pow() - Potenciação
        * sqrt() - Raiz quadrada
        * round() - Arredondamento
        * intval() - Valor inteiro da variável
        * number_format() - Formatação
        *
    */
    ?>


</body>
</html>