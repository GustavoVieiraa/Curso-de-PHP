<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variáveis de Variáveis</title>
</head>
<body>
    <?php
    
    $nome = "gustavo";
    $$nome = "abc";
    echo "O conteúdo da Variavel NOME e $nome";
    echo "<br>O conteúdo da variavel criada recebeu o valor $gustavo";
    
    
    ?>
</body>
</html>