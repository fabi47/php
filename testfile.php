<?php

for ($i = 1; $i < 10; $i++){

    $info = array(
            "1の段" =>  array(
                "1" * "$i"

            ),
            "kuku" =>  array(
                "2" * $i,
                "3" * $i,
                "4" * $i,
                "5" * $i,
                "6" * $i,
                "7" * $i,
                "8" * $i,
                "9" * $i
            )
            );

    foreach ($info as $values) {
        foreach ($values as $value) {
            echo $value . "\n";
        }
    }
}
 ?>
