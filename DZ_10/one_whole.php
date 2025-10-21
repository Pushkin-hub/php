<?php
echo "<!DOCTYPE html>
<html>
<head>
    <title>PHP Web Application</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; }
        .section { margin-bottom: 40px; padding: 20px; border: 1px solid #ccc; }
    </style>
</head>
<body>
    <h1>PHP Web Application</h1>";

// Отрицательные числа
echo "<div class='section'>
    <h2>1. Отрицательные числа</h2>";
$numbers = [10, -5, 23, -8, 15, -3, 7];
processNegativeNumbers($numbers);
echo "</div>";

// Конвертация чисел
echo "<div class='section'>
    <h2>2. Конвертация чисел</h2>
    <p>4532 = " . numberToText(4532) . "</p>
    <p>123 = " . numberToText(123) . "</p>
</div>";

// Генерация div'ов
echo "<div class='section'>
    <h2>3. Рекурсивные div'ы</h2>
    <div style='position: relative; height: 600px; border: 1px dashed #ccc;'>";
generateDivs(5); // Генерируем 5 div'ов для примера
echo "</div></div>";

// Продукты
echo "<div class='section'>
    <h2>4. Каталог продуктов</h2>";
displayProduct("iPhone 15", "iphone.jpg", 99990);
displayProduct("Samsung Galaxy", "samsung.jpg", 79990);
displayProduct("Xiaomi", "xiaomi.jpg", 49990);
echo "</div>";

// Корзина
echo "<div class='section'>
    <h2>5. Корзина покупок</h2>";
$cart = processCart($products);
if ($cart) {
    foreach ($cart as $item) {
        echo "<div style='border: 1px solid #ddd; padding: 10px; margin: 5px;'>
            <strong>{$item['name']}</strong><br>
            Количество: {$item['count']}<br>
            Цена за единицу: {$item['price']} руб.<br>
            Общая стоимость: {$item['total_price']} руб.
        </div>";
    }
}
echo "</div>";

echo "</body></html>";
