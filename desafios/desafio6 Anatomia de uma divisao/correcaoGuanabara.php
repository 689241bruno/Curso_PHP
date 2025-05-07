<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anatomia de uma divisao</title>
    <link rel="stylesheet" href="correcao.css">
</head>
<body>
    <?php 
        $dividendo = $_GET['d1'] ?? 0;
        $divisor = $_GET['d2'] ?? 1;
    ?>
    <main>
        <h1>Anatomia da Divisão</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <section>
                <label for="">Dividendo</label>
                <input type="number" name="d1" id="" min="0" value="<?=$dividendo?>">
            </section>
            <section>
                <label for="" id="div">Divisor</label>
                <input type="number" name="d2" min="1" value="<?=$divisor?>">
            </section>
            <input type="submit" value="Enviar" id="btn">
        </form>
    </main>
    <section id="result">
        <h2>Estrutura da divisão</h2>
        <?php 
        
        $quociente = intdiv($dividendo, $divisor);
        $resto = $dividendo % $divisor;

        ?>

        <table class="divisao">
            <tr>
                <td><?=$dividendo?></td>
                <td><?=$divisor?></td>
            </tr>
            <tr>
                <td><?=$resto?></td>
                <td><?=$quociente?></td>
            </tr>
        </table>
        </div>
    </section>
</body>
</html>