<?php
function processNegativeNumbers($array) {
    if (!is_array($array)) {
        return false;
    }
    
    echo "[";
    foreach ($array as $key => $value) {
        if (!is_numeric($value)) {
            return false;
        }
        
        if ($key > 0) echo ", ";
        
        if ($value < 0) {
            echo "<span style='color: red;'>$value</span>";
        } else {
            echo $value;
        }
    }
    echo "]";
    
    return true;
}

$numbers = [1, -5, 3, -2, 8, -1];
processNegativeNumbers($numbers);
