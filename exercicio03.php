<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso de PHP</title>
    <link rel="stylesheet" href="_css/estilo.css">
    <style>
        a{
            font-size: 20pt;
            color: red;
        }
    </style>
</head>
<body>
<div>
    <?php
    $e = isset($_GET["estado"])?$_GET["estado"]:"Estado Inválido";
    switch ($e){
        case "AP":
        case "AM":
        case "AC":
        case "PA":
        case "RO":
        case "RR":
        case "TO":
            $regiao = "Região Norte";
            break;
        case "AL":
        case "BA":
        case "CE":
        case "MA":
        case "PI":
        case "PE":
        case "PB":
        case "RN":
        case "SE":
            $regiao = "Região Nordeste";
            break; 
        case "GO":
        case "MT":
        case "MS":
        case "DF":
            $regiao = "Região Centro-Oeste";
            break;
        case "RJ":
        case "SP":
        case "MG":
        case "ES":
            $regiao = "Região Sudeste";
            break;
        case "RS":
        case "SC":
        case "PR":
            $regiao = "Região Sul";
            break;
      }
      echo "Você mora na <span class='foco'>$regiao</span>"
    ?>
    
</div>
<a href="exercicio03.html">Voltar</a>
</body>
</html>