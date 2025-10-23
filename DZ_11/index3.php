<?php
/**
 * @param mixed &$a Первая переменная (по ссылке)
 * @param mixed &$b Вторая переменная (по ссылке)
 */
function swap(&$a, &$b) {
    $temp = $a;
    $a = $b;
    $b = $temp;
}

$x = 10;
$y = 20;

echo "3. Обмен значений:\n";
echo "До обмена: x = $x, y = $y\n";
swap($x, $y);
echo "После обмена: x = $x, y = $y\n\n";
