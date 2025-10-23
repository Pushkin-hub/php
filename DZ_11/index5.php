<?php
/**
 * @param string $expression Строка с выражением
 * @return float Результат вычисления
 */
function calculateAdvanced($expression) {
    $expression = str_replace(' ', '', $expression);
    
    while (($start = strrpos($expression, '(')) !== false) {
        $end = strpos($expression, ')', $start);
        if ($end === false) {
            throw new Exception("Непарные скобки!");
        }
        
        $subExpr = substr($expression, $start + 1, $end - $start - 1);
        $subResult = evaluateExpression($subExpr);
        $expression = substr($expression, 0, $start) . $subResult . substr($expression, $end + 1);
    }
    
    return evaluateExpression($expression);
}

/**
 * @param string $expression Выражение без скобок
 * @return float Результат
 */
function evaluateExpression($expression) {
    $tokens = tokenize($expression);
    
    $tokens = processOperations($tokens, ['*', '/']);
    
    $tokens = processOperations($tokens, ['+', '-']);
    
    return $tokens[0];
}

/**
 * @param string $expression Выражение
 * @return array Массив токенов
 */
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
            
            if ($char === '+' || $char === '-' || $char === '*' || $char === '/') {
                if ($char === '-' && (empty($tokens) || 
                    (is_string(end($tokens)) && end($tokens) !== ')'))) {
                    $number .= $char;
                } else {
                    $tokens[] = $char;
                }
            }
        }
    }
    
    if ($number !== '') {
        $tokens[] = (float)$number;
    }
    
    return $tokens;
}

/**
 * @param array $tokens Токены
 * @param array $operations Операции для выполнения
 * @return array Токены после обработки
 */
function processOperations($tokens, $operations) {
    $i = 0;
    while ($i < count($tokens)) {
        if (in_array($tokens[$i], $operations)) {
            $left = $tokens[$i - 1];
            $operator = $tokens[$i];
            $right = $tokens[$i + 1];
            
            switch ($operator) {
                case '*':
                    $result = $left * $right;
                    break;
                case '/':
                    if ($right == 0) {
                        throw new Exception("Деление на ноль!");
                    }
                    $result = $left / $right;
                    break;
                case '+':
                    $result = $left + $right;
                    break;
                case '-':
                    $result = $left - $right;
                    break;
                default:
                    $result = 0;
            }
            
            array_splice($tokens, $i - 1, 3, [$result]);
            $i = 0;
        } else {
            $i++;
        }
    }
    
    return $tokens;
}

try {
    echo "5. Вычисление сложных выражений:\n";
    
    $expr1 = "(2+3)*4";
    $expr2 = "10 + 20 * 3";
    $expr3 = "100 / (2 + 3)";
    $expr4 = "((15-5)*2 + 10)/3";
    $expr5 = "2.5 * 4 + 1.5";
    $expr6 = "-5 + 10 * 2";
    
    echo "$expr1 = " . calculateAdvanced($expr1) . "\n";
    echo "$expr2 = " . calculateAdvanced($expr2) . "\n";
    echo "$expr3 = " . calculateAdvanced($expr3) . "\n";
    echo "$expr4 = " . calculateAdvanced($expr4) . "\n";
    echo "$expr5 = " . calculateAdvanced($expr5) . "\n";
    echo "$expr6 = " . calculateAdvanced($expr6) . "\n";
    
} catch (Exception $e) {
    echo "Ошибка: " . $e->getMessage() . "\n";
}
