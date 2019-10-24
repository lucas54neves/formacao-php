<?php
    $idades = [18, 19, 30, 20, 24, 25, 38];
    $idade = $idades[2];

    echo $idade . PHP_EOL;

    for ($i=0; $i < count($idades); $i++) {
        echo "$i - $idades[$i]" . PHP_EOL;
    }

    $nomes = array("João", "Maria", "Pedro", "Ana");
    for ($i=0; $i < count($nomes); $i++) {
        echo "$i: $nomes[$i]" . PHP_EOL;
    }
?>
