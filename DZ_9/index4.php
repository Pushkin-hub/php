<?php

function drawChessPiece($row, $col, $figure) {

    $symbols = [
        'king' => '♔',
        'queen' => '♕',
        'rook' => '♖',
        'bishop' => '♗',
        'knight' => '♘',
        'pawn' => '♙'
    ];
    
    if (!isset($symbols[$figure])) {
        echo "Неверное название фигуры.";
        return;
    }

    echo "<div style='grid-row: $row; grid-column: $col; font-size: 40px;'>".$symbols[$figure]."</div>";
}

echo "<div style='display: grid; grid-template-rows: repeat(8, 50px); grid-template-columns: repeat(8, 50px);'>";
for ($r=1; $r<=8; $r++) {
    for ($c=1; $c<=8; $c++) {

        if ($r==1 && $c==4) {
            drawChessPiece($r, $c, 'queen');
        } else {
            echo "<div style='width:50px; height:50px; border:1px solid #000;'></div>";
        }
    }
}
echo "</div>";