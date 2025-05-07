<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Analisador de Número Real</h1>
        <?php 
            $num = $_POST["n"] ?? 0;
            echo "<p> Analisando o número <strong>". number_format($num, 3, ",", ".") ."</strong> informado pelo usuário: </p>";
        ?>
    </main>
</body>
</html>