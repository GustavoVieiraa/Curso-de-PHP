<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>operadores lógicos</title>
</head>
<body>
    <?php 
    
    $idade = $_GET["id"];
    
    $resp = ($idade>=18&&$idade<65)?"você tem $idade, seu voto é OBRIGATORIO!":"você tem $idade, seu voto NÃO é OBRIGATORIO!";

    echo "Pela sua idade: $resp";

    ?>
</body>
</html>