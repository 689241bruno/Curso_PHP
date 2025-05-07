<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form php</title>
</head>
<body>
        <?php   
            $v1 = $_GET["v1"] ?? 0;
            $v2 = $_GET["v2"] ?? 0;
            $soma = $v1 + $v2;
        ?>
    <main>
        <form action="<?=$_SERVER['PHP_SELF'] ?>" method="get">
            <label for="v1">Valor 1</label>
            <input type="number" name="v1" id="v1" value="<?=$v1?>">
            <label for="v2">Valor 2</label>
            <input type="number" name="v2" id="v2" value="<?=$v2?>">
            <input type="submit" value="Somar">
        </form>
        <section>
            <h2>resutado da soma</h2>
            <p><?=$soma?></p>
        </section>
    </main>
</body>
</html>