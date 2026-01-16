<?php 
    // 1. Coleta e Processamento (A Lógica)
    $numero = $_GET["numero"] ?? 0;
    $antecessor = $numero - 1;
    $sucessor = $numero + 1;
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="stylesheet" href="../css/style.css">
    <title>Resultado</title>
</head>
<body>
    <main>
        <h1>Resultado Final</h1>
        <p>O número escolhido foi <strong><?=$numero?></strong></p>
        <p>O seu <em>antecessor</em> é <?=$antecessor?></p>
        <p>O seu <em>sucessor</em> é <?=$sucessor?></p>
        
        <button onclick="javascript:history.go(-1)">&#x2b05; Voltar</button>
    </main>
</body>
</html>