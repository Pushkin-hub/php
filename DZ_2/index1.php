<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div>
        <div>
            <p>
                Есть 2 переменные. Проверить и вывести на экран,
                является ли значение первой переменной кратным
                значению второй (первое число кратно второму, если
                делится на него без остатка).
            </p>
            <p>
                <?php
                $num1 = 12;
                $num2 = 3;

                if ($num1 % $num2 == 0) {
                    echo "$num1 кратно $num2";
                } else {
                    echo "$num1 не кратно $num2";
                }
                ?>
            </p>
        </div>
        <br>
        <div>
            <p>
                Вывести квадрат большего из двух чисел.
            </p>
            <p>
                <?php
                $a = 5;
                $b = 8;

                if ($a > $b) {
                    echo pow($a, 2);
                } else {
                    echo pow($b, 2);
                }
                ?>
            </p>
        </div>
        <br>
        <div>
            <p>
                Есть переменная, в ней сохранен номер месяца (в коде
                скрипта). Скрипт возвращает количество дней в этом
                месяце.
            </p>
            <p>
                <?php
                $month = 2;
                
                switch ($month) {
                    case 1:
                    case 3:
                    case 5:
                    case 7:
                    case 8:
                    case 10:
                    case 12:
                        echo "31 день";
                        break;
                    case 4:
                    case 6:
                    case 9:
                    case 11:
                        echo "30 дней";
                        break;
                    case 2:
                        echo "28 или 29 дней (високосный год)";
                        break;
                    default:
                        echo "Некорректный номер месяца";
                }
                ?>

            </p>
        </div>
        <br>
        <div>
            <p>
                Есть переменная, в ней (в скрипте) сохранен год. Проверить, является ли внесенный год високосным.
            </p>
            <p>
                <?php
                $year = 2024;

                if (($year % 4 == 0 && $year % 100 != 0) || $year % 400 == 0) {
                    echo "$year - високосный год";
                } else {
                    echo "$year - не високосный год";
                }
                ?>
            </p>
        </div>
        <br>
        <div>
            <p>
                Вывести сумму двух чисел, если они оба кратны 3, или
                вывести результат деления при условии, что второе
                число не равно нулю (если ноль, то выводится сообщение о некорректном вводе).
            </p>
            <p>
                <?php
                $num1 = 6;
                $num2 = 3;

                if ($num1 % 3 == 0 && $num2 % 3 == 0) {
                    echo "Сумма: " . ($num1 + $num2);
                } elseif ($num2 != 0) {
                    echo "Деление: " . ($num1 / $num2);
                } else {
                    echo "Ошибка: деление на ноль!";
                }
                ?>

            </p>
        </div>
        <br>
        <div>
            <p>
                Разработать страницу, которая проверяет, авторизован ли пользователь. на странице есть переменная
                session_id. Если в переменной записано число 0,
                то пользователь видит форму регистрации (логин
                Домашнее задание 2
                2
                и пароль). Если 1, то выводит сообщение «Вы зарегистрированы, войдите».
            </p>
            <p>
                <?php
                $session_id = 0;
                if ($session_id == 0) {
                    echo '<form action="#" method="post">';
                    echo 'Логин: <input type="text" name="login"><br>';
                    echo 'Пароль: <input type="password" name="password"><br>';
                    echo '<button type="submit">Зарегистрироваться</button>';
                    echo '</form>';
                } else {
                    echo "Вы зарегистрированы, войдите";
                }
                ?>
            </p>
        </div>
        <br>
        <div>
            <p>
                Разработать программу, которая будет рисовать div
                по указанным в переменных координатам с указанным цветом, если координаты не выходят за пределы
                экрана.
            </p>
            <p>
                <?php
                $x = 50;
                $y = 30;
                $color = "red";
                $screenWidth = 800;
                $screenHeight = 600;
                $divWidth = 100;
                $divHeight = 50;
                
                if ($x >= 0 && $x + $divWidth <= $screenWidth && $y >= 0 && $y + $divHeight <= $screenHeight) {
                    echo "<div style='position: absolute; left: {$x}px; top: {$y}px; width: {$divWidth}px; height: {$divHeight}px; background-color: {$color};'>";
                    echo "Div";
                    echo "</div>";
                } else {
                    echo "Координаты выходят за пределы экрана!";
                }
                ?>
            </p>
        </div>
    </div>
</body>

</html>