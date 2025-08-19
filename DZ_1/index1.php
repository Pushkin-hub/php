<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <p>
            Конкатенация: вывод на страницу («Hello! My name
            is 'Name'»), где «Name» — это переменная, в которую
            вводится имя (выводится на странице в кавычках).
        </p>
        <p>
            <?php
            $name = "Иван";
            
            echo "Hello! My name is '{$name}'";?>
        </p>
    </div>
    <div>
        <p>
            Добавить к заданию 1 фразу «I’m Age», где Age — это
            переменная с возрастом студента (выводится с новой
            строки).
        </p>
        <p>
            <?php
            $age = 23;

            echo "Hello! My name is '{$name}'\n";
            echo "I’m {$age}";?>
        </p>
    </div>
    <div>
        <p>
            В задание 3 из практических добавить вывод действий в таком формате: 
            'a'+'b'='rez', где a — это значение
            1-й переменной, b — это значение 2-й переменной,
            rez — результат операции между ними.
        </p>
        <p>
            <?php
            $a = 5;
            $b = 8;

            $rez = $a + $b;

            echo "'{$a}'+'{$b}'='{$rez}'";?>
        </p>
    </div>
    <div>
        <p>
            Поменять 2 числа местами без использования 3-й переменной.
        </p>
        <p>
            <?php
            $x = 12;
            $y = 34;

            $x = $x + $y;
            $y = $x - $y;
            $x = $x - $y;

            echo "x = {$x}, y = {$y}";?>
        </p>
    </div>
</body>
</html>