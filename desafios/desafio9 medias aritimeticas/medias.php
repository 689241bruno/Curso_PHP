<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css?v=<?php echo time();?>">
</head>
<body>
    <?php 
    
        $n1 = $_GET['n1'] ?? 1;
        $n2 = $_GET['n2'] ?? 1;
        $p1 = $_GET['p1'] ?? 1;
        $p2 = $_GET['p2'] ?? 1;
        $mediaS = ($n1 + $n2) / 2;
        $mediaP = ($n1*$p1 + $n2*$p2) / ($p1 + $p2);

    ?>
    <main>
        <h1>Médias Aritméticas</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <section>
                <label for="">1° valor</label>
                <input type="number" name="n1" value="<?=$n1?>" step="0.1">
            </section>
            <section>
                <label for="">1° peso</label>
                <input type="number" name="p1" value="<?=$n2?>" step="0.1">
            </section>
            <section>
                <label for="">2° valor</label>
                <input type="number" name="n2" value="<?=$p1?>" step="0.1">
            </section>
            <section>
                <label for="">2° peso</label>
                <input type="number" name="p2" value="<?=$p2?>" step="0.1">
            </section>
            <input type="submit" value="Enviar" id="btn">
        </form>
    </main>
    <div id="resultado">
        <h2> Resultado Final </h2>
        <p>analisando os valores <?=$n1?> e <?=$n2?>:</p>
        <ul>
            <li>A <strong>Média Aritimética Simples</strong> entre os valores é igual a <?=number_format($mediaS, 2, ",")?>.</li>
            <li>A <strong>média Atitimética Ponderada</strong> com os pesos de <?=$n1?> e <?=$n2?> é igua a <?=number_format($mediaP, 2, ",") ?></li>
        </ul>
    </div>
</body>
</html>