<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Conversor de moedas v1.0</title>
</head>
<body>
    <header>
        <h1>Conversor de moedas v1.0</h1>
    </header>
    <main>
        <form action="conversor.php" method="get">
            <p>Quantidade em R$ que você tem na carteira?</p>
            <input type="number"  name="reais" id="inputReais" step=".01">
            <input type="submit" value="Converter" id="btnConverter">
        </form>
    </main>
</body>
</html>