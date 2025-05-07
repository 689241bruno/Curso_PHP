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
    
        $salMin = 1412;
        $saluser = $_GET['sal'];
        $qntSalMin = (int) ($saluser / $salMin);
        $restoSal = $saluser - ($qntSalMin * $salMin);
        $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);

    
    ?>
    <main>
        <h1>Informe seu salário</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <section>
                <label for="">Salário (R$)</label>
                <input type="number" name="sal" value="<?=$saluser?>" step="0.01">
            </section>
            <p>considerando o salário mínimo de <strong>R$1.412,00</strong></p>
            <input type="submit" value="Enviar" id="btn">
        </form>
    </main>
    <div id="resultado">
        <h2>Resultado final</h2>
        <p>
            Quem recebe um salário de <?=numfmt_format_currency($padrao, $salMin, "BRL")?> ganha <strong><?=$qntSalMin?> salários mínimos</strong> + <?=numfmt_format_currency($padrao, $restoSal, "BRL")?>
        </p>
    </div>
</body>
</html>