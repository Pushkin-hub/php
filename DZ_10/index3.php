<?php
function generateDivs($count = 10, $current = 1) {
    if ($current > $count) {
        return;
    }
    
    $left = rand(0, 500);
    $top = rand(0, 500);
    
    echo "<div style='position: absolute; left: {$left}px; top: {$top}px; width: 50px; height: 50px; background-color: #" . dechex(rand(0x000000, 0xFFFFFF)) . ";'>$current</div>";

    generateDivs($count, $current + 1);
}

echo "<div style='position: relative; height: 600px;'>";
generateDivs();
echo "</div>";
