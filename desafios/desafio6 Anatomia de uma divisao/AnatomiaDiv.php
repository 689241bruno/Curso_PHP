<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anatomia de uma divisao</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $dividendo = $_GET['Dividendo'] ?? 0;
        $divisor = $_GET['Divisor'] ?? 0;
        $resultado = (int) ($dividendo/$divisor);
        $resto = $dividendo - ($resultado * $divisor);
    ?>
    <main>
        <h1>Anatomia da Divisão</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <section>
                <label for="">Dividendo</label>
                <input type="number" name="Dividendo" id="" value="<?=$dividendo?>">
            </section>
            <section>
                <label for="" id="div">Divisor</label>
                <input type="number" name="Divisor" value="<?=$divisor?>">
            </section>
            <input type="submit" value="Enviar" id="btn">
        </form>
    </main>
    <div id="resultado">
        <h2>Estrutura da divisão</h2>
        <div id="estrutura">
            <section>
                <p><?=$dividendo?></p>
                <p><?=$resto?></p>
            </section>
            <section id="d">
                <p id="divisor"><?=$divisor?></p>
                <p><?=$resultado?></p>
            </section>
        </div>
    </div>
</body>
</html>