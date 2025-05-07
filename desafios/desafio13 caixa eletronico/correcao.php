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
    
        $v = $_GET['valor'] ;
        
        $resto = $v;
        $tot100 = floor($resto / 100);
        $resto %= 100;
        $tot50 = floor($resto / 50);
        $resto %= 50;
        $tot10 = floor($resto / 10);
        $resto %= 10;
        $tot5 = floor($resto / 5);
        $resto %= 5;

    
    ?>
<main>
    <h1>Calculando saque</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <section>
                <label for="">Qual é o valor do saque? </label>
                <input type="number" name="valor" value="<?=$v?>" step="5">
            </section>
            <input type="submit" value="Enviar" id="btn">
        </form>
    </main>
    <div id="resultado">
        <p>Analisando o valor que você digitou em <strong><?php ?> segundos</strong> que equivalem a um total de:</p>
        <ul>
            <li>100: <?=$tot100 ?? 0?> </li>
            <li>50: <?=$tot50 ?? 0?></li>
            <li>10: <?=$tot10 ?? 0?></li>
            <li>5: <?=$tot5 ?? 0?></li>
            
        </ul>
    </div>
</body>
</html>