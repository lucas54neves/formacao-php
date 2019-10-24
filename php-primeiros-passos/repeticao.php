<?php
    $contador = 0;

    while ($contador <= 15) {
        echo $contador . PHP_EOL;
        $contador = $contador + 1;
    }

    for ($i=15; $i >=0; $i--) {
        if ($i == 13) {
            continue;
        } elseif ($i == 3) {
            break;
        } else {
            echo $i . PHP_EOL;
        }
    }

    $a = 0;
    do {
        echo "string: " . $a . PHP_EOL;
        $a++;
    } while ($a <= 10);
?>
