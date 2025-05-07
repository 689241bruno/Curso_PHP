<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Desafio2 números aleatórios</title>
</head>
<body>
    <header>
        <h1>Trabalhando com números aleatórios</h1>
    </header>
    <main>
        <p>Gerando um número aleatório entre 0 e 100...</p>
        <?php 
            $num = mt_rand(0, 100);
            echo "<p>O valor gerado foi <b>$num</b></p>";
        ?>
        <a href="index.php"> 🔄 Gerar outro</a>
    </main>
</body>
</html>
