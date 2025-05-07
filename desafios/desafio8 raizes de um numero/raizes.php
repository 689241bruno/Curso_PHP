<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $num = $_GET['num'];
        $sqrtNum = sqrt($num);
        $sqrt3Num = $num ** (1/3);
    ?>

    <main>
        <h1>Informe um número</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <section>
                <label for="">Número</label>
                <input type="number" name="num" value="<?=$num?>" step="1">
            </section>
            <input type="submit" value="Enviar" id="btn">
        </form>
    </main>
    <div id="resultado">
        <h2> Resultado Final </h2>
        <p>analisando o <strong>número <?=$num?></strong>, temos:</p>
        <ul>
            <li>A sua raiz quadrada é <strong><?=number_format($sqrtNum, 2, ",")?></strong></li>
            <li>A sua raiz cúbica é <strong><?=number_format($sqrt3Num, 2, ",")?></strong></li>
        </ul>
    </div>
</body>
</html>