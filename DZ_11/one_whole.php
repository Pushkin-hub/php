<?php
function generateRandomArray($count_elem, $min_val, $max_val) {
    if ($min_val > $max_val) {
        list($min_val, $max_val) = [$max_val, $min_val];
    }
    
    $array = [];
    for ($i = 0; $i < $count_elem; $i++) {
        $array[] = rand($min_val, $max_val);
    }
    return $array;
}

function power($number, $power) {
    return pow($number, $power);
}

function swap(&$a, &$b) {
    list($a, $b) = [$b, $a];
}

function calculateAdvanced($expression) {
    $expression = str_replace(' ', '', $expression);
    
    while (($start = strrpos($expression, '(')) !== false) {
        $end = strpos($expression, ')', $start);
        if ($end === false) throw new Exception("Непарные скобки!");
        
        $subExpr = substr($expression, $start + 1, $end - $start - 1);
        $subResult = evaluateExpression($subExpr);
        $expression = substr($expression, 0, $start) . $subResult . substr($expression, $end + 1);
    }
    
    return evaluateExpression($expression);
}

function evaluateExpression($expression) {
    $tokens = tokenize($expression);
    $tokens = processOperations($tokens, ['*', '/']);
    $tokens = processOperations($tokens, ['+', '-']);
    return $tokens[0];
}

function tokenize($expression) {
    $tokens = [];
    $number = '';
    
    for ($i = 0; $i < strlen($expression); $i++) {
        $char = $expression[$i];
        
        if (is_numeric($char) || $char === '.') {
            $number .= $char;
        } else {
            if ($number !== '') {
                $tokens[] = (float)$number;
                $number = '';
            }
            
            if (in_array($char, ['+', '-', '*', '/'])) {
                if ($char === '-' && (empty($tokens) || is_string(end($tokens)))) {
                    $number .= $char;
                } else {
                    $tokens[] = $char;
                }
            }
        }
    }
    
    if ($number !== '') $tokens[] = (float)$number;
    return $tokens;
}

function processOperations($tokens, $operations) {
    $i = 0;
    while ($i < count($tokens)) {
        if (in_array($tokens[$i], $operations)) {
            $left = $tokens[$i - 1];
            $operator = $tokens[$i];
            $right = $tokens[$i + 1];
            
            $result = match($operator) {
                '*' => $left * $right,
                '/' => $right != 0 ? $left / $right : throw new Exception("Деление на ноль!"),
                '+' => $left + $right,
                '-' => $left - $right,
            };
            
            array_splice($tokens, $i - 1, 3, [$result]);
            $i = 0;
        } else {
            $i++;
        }
    }
    return $tokens;
}

echo "<h2>Демонстрация всех функций PHP</h2>\n";

echo "<h3>1. Генерация массива случайных чисел:</h3>\n";
$arr = generateRandomArray(5, 10, 1);
echo "Массив: " . implode(', ', $arr) . "\n";

echo "<h3>2. Возведение в степень:</h3>\n";
echo "2^3 = " . power(2, 3) . "<br>\n";
echo "5^2 = " . power(5, 2) . "<br>\n";

echo "<h3>3. Обмен значений:</h3>\n";
$x = 15;
$y = 25;
echo "До: x = $x, y = $y<br>\n";
swap($x, $y);
echo "После: x = $x, y = $y<br>\n";

echo "<h3>4-5. Вычисление выражений:</h3>\n";
$expressions = [
    "2+3*4",
    "10 + 20 * 3",
    "(2+3)*4",
    "100 / (2 + 3)",
    "((15-5)*2 + 10)/3",
    "2.5 * 4 + 1.5"
];

foreach ($expressions as $expr) {
    try {
        $result = calculateAdvanced($expr);
        echo "$expr = $result<br>\n";
    } catch (Exception $e) {
        echo "$expr = Ошибка: " . $e->getMessage() . "<br>\n";
    }
}
