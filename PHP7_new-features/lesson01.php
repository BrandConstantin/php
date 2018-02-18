<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php

        function parse1(...$ints) {
            echo '<pre>' . json_encode($ints, JSON_PRETTY_PRINT) . '</pre>';
        }

        parse1(30, "300", 33.3, FALSE);

        //////////////////////////////////
        function pars2(int ...$ints) {
            echo '<pre>' . json_encode($ints, JSON_PRETTY_PRINT) . '</pre>';
        }

        pars2(30, "300", 33.3, FALSE);

        //////////////////////////////
        function parse3(bool ...$ints) {
            echo '<pre>' . json_encode($ints, JSON_PRETTY_PRINT) . '</pre>';
        }

        parse3(0, "0", 33.3, FALSE);

        //////////////////////////////////
        function parse4(int $int, string $string, float $float, bool $bool) {
            echo '<pre>' . json_encode(($int || $string || $float || $bool), JSON_PRETTY_PRINT) . '</pre>';
        }

        parse4(0, "0", 33.3, FALSE);
        ?>
    </body>
</html>
