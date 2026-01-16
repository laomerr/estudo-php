<?php 
            $dinheiro = $_GET["brl"];
            $cotacao = 5.22;
            $dolar = $dinheiro / $cotacao;
            $resultado_formatado = number_format($dolar, 2, ",", ".");
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <title>Desafio 3</title>
</head>
<body>

    <main>

        <h1>Conversor de Moedas V1.0</h1>

        <p>Seus R$ <?=$dinheiro?> equivalem a <strong>U$ <?= $resultado_formatado ?></strong></p>
        <strong>Cotação fixa de <?= $cotacao ?></strong> informada diretamente no código

<p><button onclick="javascript:history.go(-1)">&#x2b05; Voltar</button></p>

    </main>

    
    
</body>
</html>