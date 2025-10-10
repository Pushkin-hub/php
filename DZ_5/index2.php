<!-- 4. Массив фигур и их отображение на странице с помощью Canvas -->

<?php
$figures = [
    ['name' => 'circle', 'x' => 100, 'y' => 100, 'radius' => 50, 'color' => 'red'],
    ['name' => 'rectangle', 'x' => 200, 'y' => 50, 'width' => 100, 'height' => 50, 'color' => 'blue'],
    ['name' => 'triangle', 'x' => 300, 'y' => 150, 'size' => 50, 'color' => 'green']
];
?>

<!DOCTYPE html>
<html lang="ru">
<head>
<meta charset="UTF-8" />
<title>Фигуры</title>
</head>
<body>
<canvas id="canvas" width="500" height="300" style="border:1px solid #000;"></canvas>
<script>
const ctx = document.getElementById('canvas').getContext('2d');

const figures = <?php echo json_encode($figures); ?>;

figures.forEach(fig => {
    ctx.fillStyle = fig.color;
    if (fig.name === 'circle') {
        ctx.beginPath();
        ctx.arc(fig.x, fig.y, fig.radius, 0, Math.PI * 2);
        ctx.fill();
    } else if (fig.name === 'rectangle') {
        ctx.fillRect(fig.x, fig.y, fig.width, fig.height);
    } else if (fig.name === 'triangle') {
        ctx.beginPath();
        ctx.moveTo(fig.x, fig.y);
        ctx.lineTo(fig.x + fig.size, fig.y);
        ctx.lineTo(fig.x + fig.size / 2, fig.y - fig.size);
        ctx.closePath();
        ctx.fill();
    }
});
</script>
</body>
</html>