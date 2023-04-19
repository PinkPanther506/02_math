<?php

/**Последовательности Фибоначчи, найдите сумму 1-ых 15 
 * чётных и нечётных чисел.
 */

$one = 1;
$two = 2;
echo "$one <br/>";
echo "$two <br/>";
$o = $one;
$t = $two;

for ($x = 1; $x <= 13; $x++) {
    $three = $one + $two;
    echo "$three <br/>";
    $one = $two;
    $two = $three;

    if ($three % 2 == 2 || $three % 2 == 0) {
        $t += $three;
    }

    if ($three % 2 == 1) {
        $o += $three;
    }
}

echo "Сумма всех чётных чисел = " . $t . " " . "Сумма всех нечётных чисел = " . $o;

?>