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
        $anoAtual = date('Y');
        $anoNasc = $_GET['anoNasc'];
        $anoIdade = $_GET['anoIdade'];
        $idade = $anoIdade - $anoNasc;
    ?>
    <main>
        <h1>Calculando a sua idade</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <section>
                <label for="">Em que ano você nasceu?</label>
                <input type="number" name="anoNasc" value="<?=$anoNasc?? $anoAtual?>" min="1900" max="<?=$anoAtual-1?>" step="0.1">
            </section>
            <section>
                <label for="">Quer saber sua idade em que ano?(atualmente estamos em <?=$anoAtual?>)</label>
                <input type="number" name="anoIdade" value="<?=$anoIdade?>" step="0.1">
            </section>
            <input type="submit" value="Enviar" id="btn">
        </form>
    </main>
    <div id="resultado">
        <h2> Resultado</h2>
        <p>Quem nasceu em <?=$anoNasc?> vai ter <strong><?=$idade?> anos</strong> em <?=$anoIdade?></p>
    </div>
</body>
</html>