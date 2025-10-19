<?php

function getRandomColor() {
    return '#' . str_pad(dechex(rand(0, 0xFFFFFF)), 6, '0', STR_PAD_LEFT);
}

$color = getRandomColor();
echo "<div style='width:100px; height:100px; background-color: $color;'></div>";