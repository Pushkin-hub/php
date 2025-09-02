<!-- 6. Страница на основе массива Header, Content, Footer -->

<?php
$layout = [
    'Header' => ['height' => '100px', 'bg_color' => '#f8f9fa', 'text_color' => '#000'],
    'Content' => ['height' => '300px', 'bg_color' => '#ffffff', 'text_color' => '#333'],
    'Footer' => ['height' => '50px', 'bg_color' => '#f1f1f1', 'text_color' => '#000']
];
?>

<!DOCTYPE html>
<html lang="ru">
<head>
<meta charset="UTF-8" />
<title>Страница</title>
<style>
  .section {
    width: 100%;
    text-align: center;
    line-height: normal;
  }
</style>
</head>
<body>

<div style="height: <?php echo $layout['Header']['height']; ?>; background-color: <?php echo $layout['Header']['bg_color']; ?>; color: <?php echo $layout['Header']['text_color']; ?>;">
  <h1>Header</h1>
</div>

<div style="height: <?php echo $layout['Content']['height']; ?>; background-color: <?php echo $layout['Content']['bg_color']; ?>; color: <?php echo $layout['Content']['text_color']; ?>;">
  <p>Content</p>
</div>

<div style="height: <?php echo $layout['Footer']['height']; ?>; background-color: <?php echo $layout['Footer']['bg_color']; ?>; color: <?php echo $layout['Footer']['text_color']; ?>;">
  <p>Footer</p>
</div>

</body>
</html>