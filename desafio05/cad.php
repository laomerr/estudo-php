<?php 

    $nr = $_GET["numero"] ?? 0;
    $inteiro = (int) $nr;
    $fracao = $nr - $inteiro;
    $fracao_formatado = number_format($fracao, 3, ",", ".");
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <title>Desafio5</title>
</head>
<body>

    <main>
        <h1>Analisador de Número Real</h1>

        <p>Analisando o número <strong><?= $nr ?></strong> informado pelo usuário:</p>

        <ul>    
            <li>a parte inteira do numero é <strong><?= $inteiro ?></strong></li>
            <li>a parte fracionária do numero é <strong><?= $fracao_formatado ?></strong></li>  
        </ul>
        
        <button onclick="javascript:history.go(-1)">&#x2b05; Voltar</button>
        
    </main>

    
</body>
</html>