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
        if ($v % 5 == 0){
            if($v >= 100){
                $n100 = (int) ($v / 100);
                $resto = $v % 100;
                if($resto >= 50){
                    $n50 = (int) ($resto / 50);
                    $resto = $resto % 50;
                    if($resto >= 10){
                        $n10 = (int) ($resto / 10);
                        $resto = $resto % 10;
                        if($resto >= 5){
                            $n5 = (int) ($resto / 5);
                        }
                    }elseif($resto >= 5){
                        $n5 = (int) ($resto / 5);
                    }
                }
                elseif($resto >= 10){
                    $n10 = (int) ($resto / 10);
                    $resto = $resto % 10;
                    if($resto >= 5){
                        $n5 = (int) ($resto / 5);
                    }
                }
                elseif($resto >= 5){
                    $n5 = (int) ($resto / 5);
                }
            }

            //-----------------------------------------------


            elseif($v >= 50){
                $n50 = (int) ($v / 50);
                $resto = $v % 50;
                if($resto >= 10){
                    $n10 = (int) ($resto / 10);
                    $resto = $resto % 10;
                    if($resto >= 5){
                        $n5 = (int) ($resto / 5);
                    }
                }
                elseif($resto >= 5){
                    $n5 = (int) ($resto / 5);
                }
            }

            //-----------------------------------------------


            elseif($v >= 10){
                $n10 = (int) ($v / 10);
                $resto = $v % 10;
                if($resto >= 5){
                    $n5 = (int) ($resto / 5);
                }
            }
            elseif($v >= 5){
                $n5 = (int) ($v / 5);
            }
        }
        else{
            echo "<script>alert('Não foi possível sacar esse valor! ele precisa ser divisivel por 5');</script>";
        }
        
    
    ?>
<main>
    <h1>Calculando saque</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <section>
                <label for="">Qual é o valor do saque? </label>
                <input type="number" name="valor" value="<?=$v ?? 0?>" step="1">
            </section>
            <input type="submit" value="Enviar" id="btn">
        </form>
    </main>
    <div id="resultado">
        <p>Analisando o valor que você digitou em <strong><?php ?> segundos</strong> que equivalem a um total de:</p>
        <ul>
            <li>100: <?=$n100 ?? 0?> </li>
            <li>50: <?=$n50 ?? 0?></li>
            <li>10: <?=$n10 ?? 0?></li>
            <li>5: <?=$n5 ?? 0?></li>
            
        </ul>
    </div>
</body>
</html>