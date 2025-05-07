<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="conversor.css?v=<?php echo time();?>">
    <title>Conversor de moedas v1.0</title>
</head>
<body>
    <header>
        <h1>Conversor de moedas v1.0</h1>
    </header>
    <main>
        <?php
        
            $inicio = date("m-d-Y", strtotime("-7 days"));
            $fim = date("m-d-Y");

            $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\''. $inicio .'\'&@dataFinalCotacao=\''. $fim .'\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,cotacaoVenda,dataHoraCotacao';
        
            $dados = json_decode(file_get_contents($url), true);
        
            //var_dump($dados);

            $cotacao = $dados["value"][0]["cotacaoCompra"];

            $reais =(float) $_GET["reais"];

            $dolar = round($reais / $cotacao);

            $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);
            echo "<p>Seus ". numfmt_format_currency($padrao, $reais, "BRL"). " equivalem a " . numfmt_format_currency($padrao, $dolar, "USD") . "</p>";
        ?>
        <p><b>Cotação fixa de R$6,18</b> informadada diretamente no código</p>
        <a href="javascript:history.back()">Voltar</a>
    </main>
</body>
</html>

