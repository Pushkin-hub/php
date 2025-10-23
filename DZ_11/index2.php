<?php
/**
 * @param float $number Число
 * @param float $power Степень
 * @return float Результат возведения в степень
 */
function power($number, $power) {
    return pow($number, $power);
}


$result1 = power(2, 3);
$result2 = power(5, 2);
$result3 = power(10, -1);

echo "2. Возведение в степень:\n";
echo "2^3 = $result1\n";
echo "5^2 = $result2\n";
echo "10^(-1) = $result3\n\n";
