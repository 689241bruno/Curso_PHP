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
        $s = $_GET['segundos'];

//-------------------------------------------------

        if($s >= 604800){
            $semana = (int) ($s / 604800);
            $resto = $s % 604800;
            if($resto >= 86400){
                $dia = (int) ($resto / 86400);
                $resto = $resto % 86400;
                if($resto >= 3600){
                    $hora = (int) ($resto / 3600);
                    $resto = $resto % 3600;
                    if($resto >= 60){
                        $min = (int) ($resto / 60);
                        $seg = $resto % 60;
                    }else{
                        $seg = $resto;
                    }
                }elseif($resto >= 60){
                    $min = (int) ($resto / 60);
                    $seg = $resto % 60;
                }else{
                    $seg = $s;
                }
            }elseif($resto >= 3600){
                $hora = (int) ($resto / 3600);
                $resto = $resto % 3600;
                if($resto >= 60){
                    $min = (int) ($resto / 60);
                    $seg = $resto % 60;
                }else{
                    $seg = $resto;
                }
            }elseif($s >= 60){
                $min = (int) ($resto / 60);
                $seg = $resto % 60;
            }else{
                $seg = $resto;
            }
        }    
//-------------------------------------------------

        elseif($s >= 86400){
            $dia = (int) ($s / 86400);
            $resto = $s % 86400;
            if($resto >= 3600){
                $hora = (int) ($resto / 3600);
                $resto = $resto % 3600;
                if($resto >= 60){
                    $min = (int) ($resto / 60);
                    $seg = $resto % 60;
                }else{
                    $seg = $resto;
                }
            }elseif($resto >= 60){
                $min = (int) ($resto / 60);
                $seg = $resto % 60;
            }else{
                $seg = $resto;
            }
        }
        
//-------------------------------------------------

        elseif($s >= 3600){
            $hora = (int) ($s / 3600);
            $resto = $s % 3600;
            if($resto >= 60){
                $min = (int) ($resto / 60);
                $seg = $resto % 60;
            }else{
                $seg = $resto;
            }
        }elseif($s >= 60){
            $min = (int) ($s / 60);
            $seg = $s % 60;
        }else{
            $seg = $s;
        }

        //-------------------------------------------------


    ?>
    <main>
        <h1>Calculando a sua idade</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <section>
                <label for="">Qual é o total de segundos? </label>
                <input type="number" name="segundos" value="<?=$s?>" step="1">
            </section>
            <input type="submit" value="Enviar" id="btn">
        </form>
    </main>
    <div id="resultado">
        <p>Analisando o valor que você digitou em <strong><?php ?> segundos</strong> que equivalem a um total de:</p>
        <ul>
            <li>Semana: <?=$semana ?? 0?></li>
            <li>Dia: <?=$dia ?? 0?></li>
            <li>Hora: <?=$hora ?? 0?></li>
            <li>Minutos: <?=$min ?? 0?></li>
            <li>Segundos: <?=$seg ?? 0?></li>
            
        </ul>
    </div>
</body>
</html>