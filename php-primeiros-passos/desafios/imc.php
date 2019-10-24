<?php
    $altura = 1.84;
    $peso = 100;
    $imc = $peso / ($altura ** 2);

    echo "Seu IMC é $imc. Seu IMC está ";

    if ($imc < 18) {
        echo "abaixo";
    } elseif ($imc < 25) {
        echo "dentro";
    } else {
        echo "acima";
    }

    echo " do recomendado." . PHP_EOL;
?>
