<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../node_modules/bootstrap/dist/js/bootstrap.min.js">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-6 offset-3 mt-3 p-3 border rounded shadow-sm">
                <p>
                    Имеется массив из 10 элементов, структура элемента:
                    name, company, position. Вывести на экран массив в
                    следующем формате: «“Name” is working in “Company”
                    as: “position”».
                </p>
                <p>
                    <?php
                    $employees = [
                        ['name' => 'Alice', 'company' => 'Google', 'position' => 'Developer'],
                        ['name' => 'Bob', 'company' => 'Microsoft', 'position' => 'Manager'],
                        ['name' => 'Charlie', 'company' => 'Apple', 'position' => 'Designer'],
                        ['name' => 'Diana', 'company' => 'Google', 'position' => 'Tester'],
                        ['name' => 'Eve', 'company' => 'Amazon', 'position' => 'Developer'],
                        ['name' => 'Frank', 'company' => 'Microsoft', 'position' => 'Support'],
                        ['name' => 'Grace', 'company' => 'Apple', 'position' => 'Developer'],
                        ['name' => 'Hank', 'company' => 'Amazon', 'position' => 'Manager'],
                        ['name' => 'Ivy', 'company' => 'Google', 'position' => 'HR'],
                        ['name' => 'Jack', 'company' => 'Microsoft', 'position' => 'Developer'],
                    ];

                    foreach ($employees as $emp) {
                        echo "\"{$emp['name']}\" is working in \"{$emp['company']}\" as: \"{$emp['position']}\".<br>";
                    }
                    ?>
                </p>
            </div>
            <div class="col-6 offset-3 mt-3 p-3 border rounded shadow-sm">
                <p>
                    2. Отфильтровать массив из задания 1 и вывести работников в зависимости от компаний в виде списка.
                </p>
                <p>
                    <?php
                    $byCompany = [];

                    foreach ($employees as $emp) {
                        $byCompany[$emp['company']][] = $emp['name'];
                    }

                    foreach ($byCompany as $company => $names) {
                        echo "<h3>$company</h3><ul>";
                        foreach ($names as $name) {
                            echo "<li>$name</li>";
                        }
                        echo "</ul>";
                    }
                    ?>
                </p>
            </div>
            <div class="col-6 offset-3 mt-3 p-3 border rounded shadow-sm">
                <p>
                    3. Создать массив из 10 чисел. В первый элемент записать число 1. Каждое следующее число
                    генерируется
                    случайно и записывается в массив при условии, если
                    оно больше предыдущего. Результат массива вывести
                    на страницу.
                </p>
                <p>
                    <?php
                    $numbers = [1];

                    while (count($numbers) < 10) {
                        $randNum = rand(1, 100);
                        if ($randNum > end($numbers)) {
                            $numbers[] = $randNum;
                        }
                    }

                    echo "Resulting array: <br>";
                    echo implode(', ', $numbers);
                    ?>
                </p>
            </div>
            <div class="col-6 offset-3 mt-3 p-3 border rounded shadow-sm">
                <p>
                    4. Создать массив из 10 чисел. Элемент массива: число
                    с плавающей точкой и степень округления. Заполнить
                    массив, округлить и вывести на страницу.
                </p>
                <p>
                    <?php
                    $floatNumbers = [];

                    for ($i = 0; $i < 10; $i++) {
                        $float = rand(100, 1000) / 100;
                        $precision = rand(0, 3);
                        $floatNumbers[] = ['number' => $float, 'precision' => $precision];
                    }

                    foreach ($floatNumbers as $item) {
                        $rounded = round($item['number'], $item['precision']);
                        echo "Number: {$item['number']}, Precision: {$item['precision']} => Rounded: $rounded<br>";
                    }
                    ?>
                </p>
            </div>
            <div class="col-6 offset-3 mt-3 p-3 border rounded shadow-sm">
                <p>
                    5. Создать массив из 5 элементов. Элементом массива является массив из 5 цифр. Заполнить элементы
                    случайными числами от 10 до 100. Вывести массив,
                    минимальные значения в каждом столбце выделить
                    красным цветом. Найти сумму минимальных элементов в каждом столбце и их среднее значение.
                </p>
                <p>
                    <?php
                    $matrix = [];
                    $rows = 5;
                    $cols = 5;

                    for ($i = 0; $i < $rows; $i++) {
                        for ($j = 0; $j < $cols; $j++) {
                            $matrix[$i][$j] = rand(10, 100);
                        }
                    }

                    $minInCols = [];
                    for ($j = 0; $j < $cols; $j++) {
                        $colValues = array_column($matrix, $j);
                        $minInCols[$j] = min($colValues);
                    }

                    echo "<table border='1' cellpadding='5' cellspacing='0'>";
                    for ($i = 0; $i < $rows; $i++) {
                        echo "<tr>";
                        for ($j = 0; $j < $cols; $j++) {
                            $color = ($matrix[$i][$j] == $minInCols[$j]) ? 'red' : 'black';
                            echo "<td style='color: $color;'>{$matrix[$i][$j]}</td>";
                        }
                        echo "</tr>";
                    }
                    echo "</table>";

                    $sumMin = array_sum($minInCols);
                    $avgMin = $sumMin / $cols;

                    echo "<p>Сумма минимальных элементов в столбцах: $sumMin</p>";
                    echo "<p>Среднее значение минимальных элементов: $avgMin</p>";
                    ?>
                </p>
            </div>
        </div>
    </div>
</body>

</html>