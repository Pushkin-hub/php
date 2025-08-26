<!DOCTYPE html>
<html>
<head>
    <title>PHP Cycles and Tasks</title>
    <style>
        span {
            font-size: 20px;
            color: black;
        }
        .red-text {
            color: red;
        }
        .bordered {
            border: 2px solid blue;
        }
    </style>
</head>
<body>

<?php

// 1. Вывести N нечетных чисел (N записывается в переменной) и дополнительно:
// a) посчитать их среднее значение;
// b) вывести их в обратном порядке (от большего к меньшему).
$n = 7;
$odd_numbers = [];
for ($i = 1; $count < $n; $i += 2) {
    $odd_numbers[] = $i;
    $count++;
}

$sum = array_sum($odd_numbers);
$average = $sum / $n;

echo "Нечетные числа: ";
foreach ($odd_numbers as $number) {
    echo "<span style='font-size:" . max($odd_numbers) . "px;' class='red-text'>" . $number . "</span> ";
}
echo "<br>Среднее значение: <span style='font-size:" . max($odd_numbers) . "px;' class='red-text'>" . $average . "</span><br>";

echo "Нечетные числа в обратном порядке: ";
rsort($odd_numbers);
foreach ($odd_numbers as $number) {
    echo "<span style='font-size:" . max($odd_numbers) . "px;' class='red-text'>" . $number . "</span> ";
}
echo "<br><br>";

// 2. 2. Найти количество 4-значных чисел, в которых:
// c) цифры зеркальные (например, 2112);
// d) все цифры четные;
// e) все цифры нечетные;
// f) цифры идут в порядке от большего к меньшему
// (например, 4321).
function isMirror($num) {
    $str = (string)$num;
    return strrev($str) == $str;
}

function allDigitsEven($num) {
    $digits = str_split((string)$num);
    foreach ($digits as $digit) {
        if ((int)$digit % 2 != 0) {
            return false;
        }
    }
    return true;
}

function allDigitsOdd($num) {
    $digits = str_split((string)$num);
    foreach ($digits as $digit) {
        if ((int)$digit % 2 == 0) {
            return false;
        }
    }
    return true;
}

function digitsDescending($num) {
    $digits = str_split((string)$num);
    for ($i = 0; $i < count($digits) - 1; $i++) {
        if ((int)$digits[$i] < (int)$digits[$i + 1]) {
            return false;
        }
    }
    return true;
}

$count_mirror = 0;
$count_even = 0;
$count_odd = 0;
$count_descending = 0;

for ($i = 1000; $i <= 9999; $i++) {
    if (isMirror($i)) $count_mirror++;
    if (allDigitsEven($i)) $count_even++;
    if (allDigitsOdd($i)) $count_odd++;
    if (digitsDescending($i)) $count_descending++;
}

echo "Количество зеркальных чисел: " . $count_mirror . "<br>";
echo "Количество чисел с четными цифрами: " . $count_even . "<br>";
echo "Количество чисел с нечетными цифрами: " . $count_odd . "<br>";
echo "Количество чисел с цифрами в порядке убывания: " . $count_descending . "<br><br>";

// 3. Вывести на экран 10 кругов в один ряд (диаметр 50 рх, цвет синий).
for ($i = 0; $i < 10; $i++) {
    echo '<div style="width: 50px; height: 50px; border-radius: 50%; background-color: blue;"></div>';
}
echo "<br><br>";

// 4. Перевести число из двоичной в шестнадцатеричную
// систему счисления. Формат вывода по умолчанию,
// поместить в элемент <p>.
function binaryToHex($binary) {
    return strtoupper(dechex((int)$binary));
}

$binary_number = "101101";
$hexadecimal = binaryToHex($binary_number);
echo "<p>Двоичное число $binary_number в шестнадцатеричной системе: $hexadecimal</p><br>";

// 5. Отобразить число в римской системе счисления. Формат вывода по умолчанию, поместить в элемент <p>.
function intToRoman($num) {
    $roman = "";
    $values = [1 => "I", 4 => "IV", 5 => "V", 9 => "IX", 10 => "X", 40 => "XL", 50 => "L", 90 => "XC", 100 => "C", 400 => "CD", 500 => "D", 900 => "CM", 1000 => "M"];
    $keys = array_keys($values);
    rsort($keys);

    foreach ($keys as $key) {
        while ($num >= $key) {
            $roman .= $values[$key];
            $num -= $key;
        }
    }
    return $roman;
}

$number = 1984;
echo "<p>Число $number в римской системе: " . intToRoman($number) . "</p><br>";

// 6. DВывести на экран календарь на текущий месяц:
// a) выходные и праздники выделить красным цветом
// текста;
// b) текущий день обвести рамкой синего цвета;
// c) добавить стиль hover, который будет менять цвет
// на противоположный: цвет текста станет белым,
// а цвет заднего фона красным или черным.
date_default_timezone_set('Europe/Moscow');
$current_month = date("n");
$current_year = date("Y");

echo "<h2>Календарь на " . date("F", strtotime(date("Y-m-01"))) . " " . $current_year . "</h2>";
echo "<table border='1'>";
echo "<tr><th>Пн</th><th>Вт</th><th>Ср</th><th>Чт</th><th>Пт</th><th>Сб</th><th>Вс</th></tr>";

$first_day = date("N", strtotime(date("Y-m-01")));
$days_in_month = cal_days_in_month(CAL_GREGORIAN, $current_month, $current_year);


for ($i = 1; $i < $first_day; $i++) {
    echo "<td></td>";
}

for ($day = 1; $day <= $days_in_month; $day++) {
    $weekday = date("N", strtotime(date("Y-m-" . $day)));
    $is_weekend = ($weekday == 6 || $weekday == 7);

    $is_holiday = false;

    echo "<td";
    if ($is_weekend || $is_holiday) {
        echo " style='color: red;'";
    }
    if ($day == date("j")) {
        echo " class='bordered'";
    }
    echo ">" . $day . "</td>";

    if ($weekday == 7) {
        echo "</tr>";
    }
}

echo "</table><br>";

// 7. В папке img есть 10 файлов (названные от img1 до
// img10) с расширением jpg. Разработать скрипт, который
// отобразит их на странице по 5 изображений в ряд
// (размер изображения 200х150 рх).
$image_dir = 'img/';
for ($i = 1; $i <= 10; $i++) {
    $image_path = $image_dir . 'img' . $i . '.jpg';

    if (file_exists($image_path)) {
        echo '<img src="' . $image_path . '" alt="Image ' . $i . '" width="200" height="150">';
    } else {
        echo "Файл изображения img" . $i . ".jpg не найден.";
    }

    if ($i % 5 == 0) {
        echo "<br>";
    }
}

?>

</body>
</html>
