<?php
function calculate($num1, $num2, $action) {
    switch ($action) {
        case 'add':
            return $num1 + $num2;
        case 'subtract':
            return $num1 - $num2;
        case 'multiply':
            return $num1 * $num2;
        case 'divide':
            if ($num2 == 0) {
                return "Ошибка: деление на 0 невозможно.";
            }
            return $num1 / $num2;
        default:
            return "Ошибка: некорректное действие.";
    }
}

echo calculate(10, 5, 'add');