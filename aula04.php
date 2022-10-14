<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo($title); ?></title>
</head>
<body>
<div class="teste">
    <?php
                            /* Variáveis em PHP */
    // Para declarar uma variável em PHP utilizamos $ antes da variável.
    // os nomes em variáveis são todas em letras minusculas!
    // Hello, World pra se livrar da maldição né, hahahaha
    $teste = "<h1>Hello, World!</h1>"; // Tipo da variável - String
    $title = "Hello, World!"; // Tipo da variável - String
    $idade = 23; // Tipo da variável - Int
    $salario = 1825.54; // Tipo da variável - Float
    $nome = "Maria"; // Tipo da variável - String
    $casado = false; // Tipo da variável - Boolean
    echo("<h1>$nome tem $idade anos de idade.</h1>");

    /* Tipos de variáveis em PHP
    
        - Inteiro (int), (integer)
        - Real (real), (float), (double)
        - Caractere (string)
        - Lógico (???) true = 1 | false = vazio
    */
    ?>
</div>
</body>
</html>