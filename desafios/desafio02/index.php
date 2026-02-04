<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <title>Desafio 2</title>
</head>
<body>
    <main>
    <header>
        <h2>Trabalhando com números aleatórios</h2>
    </header>   
    <br>
    <?php 
        
        $n = rand(0,100);
        
        echo "Gerando um  número aleatório entre 0 e 100...";
        echo "<p>O valor gerado foi <strong>$n</strong></p>";
        echo '';
    ?>
        <a href="index.php" class="botao">&#x1f504; Gerar outro</a>

    </main>
</body>
</html>