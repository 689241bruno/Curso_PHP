<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="resultado.css">
    <title>Document</title>
</head>
<body>
    <header>
        <h1>Antecessor e Sucessor </h1>
    </header>
    <main>
        
        <?php 
            $num = (int) $_GET["num"];
            $sucessor = $num + 1;
            $antecessor = $num - 1;
            echo "<p>O número escolhido foi <b>$num</b></p>"; 
            echo "<p>O antecessor desse número é <b>$antecessor</b></p>";
            echo "<p>O Sucessor desse número é <b>$sucessor</b></p>";



            
            function __construct(){
                $dns    = "mysql:dbname=produto;host=localhost";
                $dbUser = "root";
                $dbPass = "";
                try{     
                    $this->pdo = new PDO($dns, $dbUser, $dbPass);
                }catch(Exception $e){
                    echo"Erro de conexao. Tente mais tarde";
                }
            }










        ?>
        <p><a href="javascript:history.back()">Voltar para página principal</a></p>
    </main>
</body>
</html>

