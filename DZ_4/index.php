<?php

// 1. Генерируется 100 случайных чисел. Скрипт выводит их и ищет максимальное и минимальное число.
echo "<b>Задача 1:</b><br>";
$numbers = [];
for ($i = 0; $i < 100; $i++) {
  $numbers[] = rand(1, 1000);
}

echo "Сгенерированные числа: ";
print_r($numbers);

$maxNumber = max($numbers);
$minNumber = min($numbers);

echo "<br>Максимальное число: " . $maxNumber;
echo "<br>Минимальное число: " . $minNumber;
echo "<hr>";


// 2. Считать все картинки из папки, в которой находится скрипт, и вывести их на страницу
echo "<b>Задача 2:</b><br>";
$folder = __DIR__; 

$images = glob($folder . '/*.{jpg,jpeg,png,gif}', GLOB_BRACE);

if (count($images) > 0) {
  echo "Картинки в папке:<br>";
  foreach ($images as $image) {
    echo "<img src='" . $image . "' width='100'><br>";
  }
} else {
  echo "В папке нет картинок.";
}
echo "<hr>";

// 3. Вывести на экран таблицу умножения от 2 до 10.
echo "<b>Задача 3:</b><br>";
echo "<table border='1'>";
for ($i = 2; $i <= 10; $i++) {
  echo "<tr>";
  for ($j = 2; $j <= 10; $j++) {
    echo "<td>" . $i * $j . "</td>";
  }
  echo "</tr>";
}
echo "</table><hr>";

// 4. В банке открыли депозит под 20% годовых. На депозит положили 300 единиц. Какая сумма единиц будет через 20 лет? Какая будет прибыль? Вывести в таблице сумму и прибыль за каждый год.
echo "<b>Задача 4:</b><br>";
$deposit = 300;
$interestRate = 0.20;

echo "<table border='1'>";
echo "<tr><th>Год</th><th>Сумма</th><th>Прибыль</th></tr>";

for ($year = 1; $year <= 20; $year++) {
  $profit = $deposit * $interestRate;
  $deposit += $profit;
  echo "<tr><td>" . $year . "</td><td>" . number_format($deposit, 2) . "</td><td>" . number_format($profit, 2) . "</td></tr>";
}

echo "</table><hr>";

// 5. Вывести число задом наперед (347689 -> 986743)
echo "<b>Задача 5:</b><br>";
$number = 347689;
$reversedNumber = strrev((string)$number);

echo "Исходное число: " . $number;
echo "<br>Число задом наперед: " . $reversedNumber;
echo "<hr>";


// 6. Разработать скрипт, который будет разбивать число на цифры, считать их количество, находить самую большую, самую маленькую цифру в числе, считать сумму цифр, среднее значение.
echo "<b>Задача 6:</b><br>";
$number = 1234567890;
$numberString = (string)$number;
$digits = array_map('intval', str_split($numberString));

$count = count($digits);
$maxDigit = max($digits);
$minDigit = min($digits);
$sum = array_sum($digits);
$average = $sum / $count;

echo "Исходное число: " . $number;
echo "<br>Количество цифр: " . $count;
echo "<br>Максимальная цифра: " . $maxDigit;
echo "<br>Минимальная цифра: " . $minDigit;
echo "<br>Сумма цифр: " . $sum;
echo "<br>Среднее значение: " . number_format($average, 2);

?>
