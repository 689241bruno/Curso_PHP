<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <header>
        <h1>Resultado do processamento</h1>
    </header>
    <main>
        <?php 
            $nome = $_GET["nome"] ?? "desconhecido";//Caso não receba nome ele irá subistituir por "DESCONHECIDO"
            $sobrenome = $_GET["sobrenome"] ?? "desconhecido";
            echo "<p>Seja bem vindo $nome $sobrenome </p>";
        ?>
        <p><a href="javascript:history.gol(-1)">Voltar para a página anterior</a></p>
    </main>
</body>
</html>