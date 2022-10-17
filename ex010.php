<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado dos dados coletados</title>
</head>
<body>
    <h1>Resultado dos dados coletados: </h1>
    <?php 
    $nome = isset($_GET["nome"])?$_GET["nome"]:"Não foi informado ainda"; #utilizamos isset para verificar se foi 
                                                                          #passado algo como parâmetro, verificar
                                                                          #se foi configurado!
    $email = isset($_GET["email"])?$_GET["email"]:"Email não informado ainda.";
    $anonasc = isset($_GET["anonasc"])?$_GET["anonasc"]:"Não informado";
    $sexo = isset($_GET["sexo"])?$_GET["sexo"]:"Aguardando informação";
    $anoatual = date("Y"); # esse date("Y") irá me retornar o nosso ano atual!
    $idade = $anonasc>0?($anoatual-$anonasc):"Não informado ainda.";
    echo "NOME: $nome <br>";
    echo "EMAIL: $email <br>";
    echo "ANO NASCIMENTO: $anonasc | IDADE: $idade <br>";
    echo "SEXO: $sexo <br>";
    
    ?>
    <a href="ex010.html">clique aqui para voltar</a>
</body>
</html>