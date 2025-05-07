<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos primitivos</title>
</head>
<body>
    <h1>Tipos primitivos </h1>
    <?php 
        //0x = hexadecimal, 0b = binário e 0 = Octal
        $num = 0x1A;
        echo "O valor da variável é $num <br>";

        $v = 300;
        var_dump($v);//mostra todas as informações da variável

        $nums = [1, 2, 4, 6, 22, 11];
        var_dump($nums);
    ?>
</body>
</html>