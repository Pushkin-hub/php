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
    <div class="col-6 offset-3 mt-3 p-3 border rounded shadow-sm">
        <p>
            1. Массив из 10 элементов, выводы
        </p>
        <p>
            <?php
            $numbers = [12, 7, 15, 9, 20, 18, 25, 22, 30, 28];

            echo "Элементы, которые больше предыдущих:\n";
            for ($i = 1; $i < count($numbers); $i++) {
                if ($numbers[$i] > $numbers[$i - 1]) {
                    echo $numbers[$i] . " ";
                }
            }
            echo "\n";

            $sum = array_sum($numbers);
            $average = $sum / count($numbers);
            echo "Сумма: $sum\n";
            echo "Среднее: $average\n";

            $odd_numbers = array_filter($numbers, function ($n) {
                return $n % 2 !== 0;
            });
            rsort($odd_numbers);
            echo "Нечетные элементы по убыванию:\n";
            print_r($odd_numbers);
            ?>
        </p>
    </div>
    <div class="col-6 offset-3 mt-3 p-3 border rounded shadow-sm">
        <p>
            2. Массив из 5 дат и подсчет дней между соседними датами
        </p>
        <p>
            <?php
            $dates = ['2025-01-01', '2025-01-05', '2025-01-10', '2025-01-15', '2025-01-20'];

            sort($dates);

            for ($i = 0; $i < count($dates) - 1; $i++) {
                $date1 = new DateTime($dates[$i]);
                $date2 = new DateTime($dates[$i + 1]);
                $interval = $date1->diff($date2);
                echo "Между {$dates[$i]} и {$dates[$i + 1]}: " . $interval->days . " дней\n";
            }
            ?>
        </p>
    </div>
    <div class="col-6 offset-3 mt-3 p-3 border rounded shadow-sm">
        <p>
            3. Массив из 10 элементов с ключами type и value
        </p>
        <p>
            <?php
            $items = [];
            for ($i = 0; $i < 10; $i++) {
                $items[] = [
                    'type' => 'Type' . ($i + 1),
                    'value' => rand(1, 100)
                ];
            }

            foreach ($items as $item) {
                echo "Type: {$item['type']}, Value: {$item['value']}\n";
            }
            ?>
        </p>
    </div>
    <div class="col-6 offset-3 mt-3 p-3 border rounded shadow-sm">
        <p>
            5. Массивы компонентов ПК и генерация возможных комбинаций
        </p>
        <p>
            <?php
            $processors = [
                ['name' => 'Intel i5', 'socket' => 'LGA1151', 'frequency' => '3.0GHz', 'cores' => 4],
                ['name' => 'AMD Ryzen 5', 'socket' => 'AM4', 'frequency' => '3.6GHz', 'cores' => 6]
            ];

            $motherboards = [
                ['name' => 'ASUS Prime', 'socket' => 'LGA1151', 'memory_type' => 'DDR4'],
                ['name' => 'MSI B450', 'socket' => 'AM4', 'memory_type' => 'DDR4']
            ];

            $ram_modules = [
                ['name' => 'Corsair Vengeance', 'type' => 'DDR4', 'size' => '16GB'],
                ['name' => 'Kingston HyperX', 'type' => 'DDR4', 'size' => '8GB']
            ];

            $disks = [
                ['name' => 'Samsung SSD', 'type' => 'SSD', 'size' => '512GB'],
                ['name' => 'Seagate HDD', 'type' => 'HDD', 'size' => '1TB']
            ];

            $power_supplies = [
                ['name' => 'Cooler Master', 'power' => '550W'],
                ['name' => 'Corsair', 'power' => '650W']
            ];

            echo "<h3>Возможные сборки ПК:</h3>";

            foreach ($processors as $proc) {
                foreach ($motherboards as $mb) {
                    if ($proc['socket'] == $mb['socket']) {
                        foreach ($ram_modules as $ram) {
                            foreach ($disks as $disk) {
                                foreach ($power_supplies as $psu) {
                                    echo "Процессор: {$proc['name']}, Материнская плата: {$mb['name']}, RAM: {$ram['name']}, Диск: {$disk['name']}, Блок питания: {$psu['name']}<br>";
                                }
                            }
                        }
                    }
                }
            }
            ?>
        </p>
    </div>
</body>

</html>