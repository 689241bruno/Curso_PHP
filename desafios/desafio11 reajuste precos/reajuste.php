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
        $porCt = $_GET['porCt'];
        $precoP = $_GET['precoP'];
        $precoFinal = ($precoP * ($porCt / 100)) + $precoP;
        $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);
        
    ?>
    <main>
        <h1>Calculando a sua idade</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <section>
                <label for="">Preço do Produto(R$)</label>
                <input type="number" name="precoP" value="<?=$precoP?>" step="0.01">
            </section>
            <section>
                <label for="">Qual será o percentual de reajuste? (<span id="p">?</span>%)</label>
                <input type="range" name="porCt" id="porCt" min="0" max="100" step="1" oninput="mudaValor()">
            </section>
            <input type="submit" value="Enviar" id="btn">
        </form>
    </main>
    <div id="resultado">
        <h2> Resultado do Reajuste</h2>
        <p>O produto que custava <?=numfmt_format_currency($padrao, $precoP, "BRL")?>, com <strong><?=$porCt?>% de aumento</strong> vai passar a custar <strong><?=numfmt_format_currency($padrao, $precoFinal, "BRL")?></strong> a partir de agora.</p>
    </div>
    <script>
        function mudaValor(){
            p.innerText = porCt.value;
        }
    </script>
</body>
</html>