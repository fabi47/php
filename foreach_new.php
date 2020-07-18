<?php

$psg = array(
            "mbappe" => array(
                "name" => "エムバペ",
                "no." => "7",
                "position" => "CF"
            ),
            "cavani" => array(
                "name" => "カバーニ",
                "no." => "9",
                "position" => "CF"
            ),
            "neymar" => array(
                "name" => "ネイマール",
                "no." => "10",
                "position" => "LMF"
            ),
            "dimaria" => array(
                "name" => "ディ・マリア	",
                "no." => "11",
                "position" => "RMF"
            ),
            "paredes" => array(
                "name" => "レアンドロ・パレデス",
                "no." => "8",
                "position" => "DMF"
            ),
            "kehrer" => array(
                "name" => "ケーラー",
                "no." => "4",
                "position" => "DMF"
            ),
            "bernat" => array(
                "name" => "ベルナト",
                "no." => "14",
                "position" => "LSB"
            ),
            "meunier" => array(
                "name" => "トマ・ムニエ",
                "no." => "12",
                "position" => "RSB"
            ),
            "marquinhos" => array(
                "name" => "マルキーニョス",
                "no." => "5",
                "position" => "CB"
            ),
            "thiago" => array(
                "name" => "チアゴ・シウヴァ",
                "no." => "2",
                "position" => "CB"
            ),
            "navas" => array(
                "name" => "ナバス",
                "no." => "1",
                "position" => "GK"
            ),
        );

        $ps = 'パリサンジェルマン メンバー　一覧' . "\n";

            echo $ps;

        foreach ($psg as $values) {
            foreach ($values as $value) {
                echo $value . "\n";
            }
        }

 ?>
