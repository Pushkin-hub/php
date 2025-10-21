<?php
function numberToText($number) {
    if (!is_numeric($number) || $number < 0) {
        return "Неверное число";
    }
    
    $units = ['', 'один', 'два', 'три', 'четыре', 'пять', 'шесть', 'семь', 'восемь', 'девять'];
    $teens = ['десять', 'одиннадцать', 'двенадцать', 'тринадцать', 'четырнадцать', 'пятнадцать', 'шестнадцать', 'семнадцать', 'восемнадцать', 'девятнадцать'];
    $tens = ['', '', 'двадцать', 'тридцать', 'сорок', 'пятьдесят', 'шестьдесят', 'семьдесят', 'восемьдесят', 'девяносто'];
    $hundreds = ['', 'сто', 'двести', 'триста', 'четыреста', 'пятьсот', 'шестьсот', 'семьсот', 'восемьсот', 'девятьсот'];
    
    $thousands = ['', 'тысяча', 'тысячи', 'тысяч'];
    
    $result = '';
    
    if ($number >= 1000) {
        $thousandsPart = floor($number / 1000);
        $number %= 1000;
        
        if ($thousandsPart == 1) {
            $result .= 'одна ' . $thousands[1] . ' ';
        } elseif ($thousandsPart >= 2 && $thousandsPart <= 4) {
            $result .= numberToText($thousandsPart) . ' ' . $thousands[2] . ' ';
        } else {
            $result .= numberToText($thousandsPart) . ' ' . $thousands[3] . ' ';
        }
    }
    
    if ($number >= 100) {
        $hundredsDigit = floor($number / 100);
        $result .= $hundreds[$hundredsDigit] . ' ';
        $number %= 100;
    }
    
    if ($number >= 20) {
        $tensDigit = floor($number / 10);
        $result .= $tens[$tensDigit] . ' ';
        $number %= 10;
    } elseif ($number >= 10) {
        $result .= $teens[$number - 10] . ' ';
        $number = 0;
    }
    
    if ($number > 0) {
        $result .= $units[$number] . ' ';
    }
    
    return trim($result);
}

echo numberToText(4532);
