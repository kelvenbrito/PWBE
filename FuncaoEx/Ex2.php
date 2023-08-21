<?php

function fatorial($n) {
    if ($n == 0 || $n == 1) {
        return 1;
    } else {
        return $n * fatorial($n - 1);
    }
}

$n = 4;
$resul = fatorial($n);

echo "O fatorial de $n é $resul";

?>
