<!DOCTYPE html>
<html lang="pt-br">
<head>
    <?php 
    $txt = isset($_GET["texto"])?$_GET["texto"]:"[Aguardando texto]"; # string texto passado pelo form em HTML
    $tmn = isset($_GET["tam"])?$_GET["tam"]:"12pt";  # tamanho do texto passado pelo form em HTML
    $color = isset($_GET["cor"])?$_GET["cor"]:"#000000"; # cor informada pelo form em HTML
    $background = isset($_GET["corsite"])?$_GET["corsite"]:"#ffffff";
    ?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Texto Gerado!</title>
    <style>
        *
        {
            background-color:<?php echo $background;?>;
        }
        span.teste
        {
        font-size: <?php echo $tmn;?>; /* Lembrando que não basta declarar a variavel, tem que mandar o PHP escrever ela para o valor se incluído em CSS */
            color:<?php echo $color;?>;
        }
    </style>
</head>
<body>
    <?php
      echo "<span class='teste'> $txt </span> <br>";
    ?>
    <a href="ex011.html">Voltar</a>
</body>
</html>