<?php
    $idade = 24;
    $nome = "Lucas";
    $quantidadePessoas = 1;

    echo "Você só pode entrar se tiver mais de 18 anos e for o Lucas." . PHP_EOL;

    if ($idade >= 18 and $nome == "Lucas") {
        echo "Você tem $idade anos. Pode entrar." . PHP_EOL;
    } elseif ($quantidadePessoas > 1) {
        echo "Você tem $idade anos e está acompanhado. Pode entrar." . PHP_EOL;
    } else {
        echo "Você tem $idade anos e não está acompanhado. Pode não entrar." . PHP_EOL;
    }
?>
