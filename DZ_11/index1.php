<?php
/**
 * @param int $count_elem Количество элементов
 * @param int $min_val Минимальное значение
 * @param int $max_val Максимальное значение
 * @return array Массив случайных чисел
 */
function generateRandomArray($count_elem, $min_val, $max_val) {

    if ($min_val > $max_val) {
        $temp = $min_val;
        $min_val = $max_val;
        $max_val = $temp;
    }
    
    $array = [];
    for ($i = 0; $i < $count_elem; $i++) {
        $array[] = rand($min_val, $max_val);
    }
    
    return $array;
}

$randomArray = generateRandomArray(10, 1, 100);
echo "1. Сгенерированный массив: " . implode(', ', $randomArray) . "\n\n";
