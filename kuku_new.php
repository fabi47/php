<?php

for ($i = 1; $i < 11; $i++) {

for ($a = 1; $a < 11; $a++) {

    $fruit = array($i => $a);
        foreach ($fruit as $key => $value) {
            echo "[" . $key . "x" . $value . "=" . $i*$a . "]" . "\n";
    }
}
}

 ?>
