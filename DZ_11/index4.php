<?php
/**
 * @param string $expression Строка с выражением
 * @return float Результат вычисления
 */
function calculateSimple($expression) {

    $expression = str_replace(' ', '', $expression);

    $tokens = [];
    $number = '';
    
    for ($i = 0; $i < strlen($expression); $i++) {
        $char = $expression[$i];
        
        if (is_numeric($char)) {
            $number .= $char;
        } else {
            if ($number !== '') {
                $tokens[] = (float)$number;
                $number = '';
            }
            $tokens[] = $char;
        }
    }
    
    if ($number !== '') {
        $tokens[] = (float)$number;
    }

    for ($i = 0; $i < count($tokens); $i++) {
        if ($tokens[$i] === '*' || $tokens[$i] === '/') {
            $left = $tokens[$i - 1];
            $operator = $tokens[$i];
            $right = $tokens[$i + 1];
            
            if ($operator === '*') {
                $result = $left * $right;
            } else {
                if ($right == 0) {
                    throw new Exception("Деление на ноль!");
                }
                $result = $left / $right;
            }

            array_splice($tokens, $i - 1, 3, [$result]);
            $i -= 2;
        }
    }

    $result = $tokens[0];
    for ($i = 1; $i < count($tokens); $i += 2) {
        $operator = $tokens[$i];
        $operand = $tokens[$i + 1];
        
        if ($operator === '+') {
            $result += $operand;
        } else if ($operator === '-') {
            $result -= $operand;
        }
    }
    
    return $result;
}

try {
    $expr1 = "2+3*4";
    $expr2 = "8/2-1";
    $expr3 = "1+2*3-4/2";
    
    echo "4. Вычисление выражений (однозначные числа):\n";
    echo "$expr1 = " . calculateSimple($expr1) . "\n";
    echo "$expr2 = " . calculateSimple($expr2) . "\n";
    echo "$expr3 = " . calculateSimple($expr3) . "\n\n";
} catch (Exception $e) {
    echo "Ошибка: " . $e->getMessage() . "\n";
}
