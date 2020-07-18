<?php

for ($i = 1; $i < 10; $i++) {

    $a = array('1' => $i , '2' => $i , '3' => $i , '4' => $i , '5' => $i , '6' => $i , '7' => $i , '8' => $i , '9' => $i);
    foreach($a as $key => $value){
        echo "(" , "$key" , "," , "$value" , "," , $key*$value , ")";
    }
}




/*---修正前---

for ($i = 1; $i < 11; $i++) {

    for ($a = 1; $a < 11; $a++) {

        $fruit = array($i => $a);
        foreach ($fruit as $key => $value) {
            echo "[" . $key . "x" . $value . "=" . $i*$a . "]" . "\n";
        }
    }
}

---------*/

 ?>
