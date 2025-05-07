<?php 
    $num = (float) $_GET["numero"];
    $numInt = (int) $num;
    $numDec = intdiv($num,$numTnt);
    echo "$num / $numInt = $numDec";
?>