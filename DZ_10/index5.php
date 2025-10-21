<?php
function processCart($products) {
    if (!is_array($products)) {
        return false;
    }
    
    $cart = [];
    
    foreach ($products as $product) {
        if (!isset($product['name']) || !isset($product['price'])) {
            continue;
        }
        
        $productKey = $product['name'] . '_' . (isset($product['image']) ? $product['image'] : '');
        
        if (isset($cart[$productKey])) {
            $cart[$productKey]['count']++;
            $cart[$productKey]['total_price'] = $cart[$productKey]['count'] * $product['price'];
        } else {
            $cart[$productKey] = [
                'name' => $product['name'],
                'image' => $product['image'] ?? '',
                'count' => 1,
                'price' => $product['price'],
                'total_price' => $product['price']
            ];
        }
    }
    
    return array_values($cart);
}

$products = [
    ['name' => 'iPhone 15', 'image' => 'iphone.jpg', 'price' => 99990],
    ['name' => 'Samsung Galaxy', 'image' => 'samsung.jpg', 'price' => 79990],
    ['name' => 'iPhone 15', 'image' => 'iphone.jpg', 'price' => 99990],
    ['name' => 'Xiaomi', 'image' => 'xiaomi.jpg', 'price' => 49990],
    ['name' => 'Samsung Galaxy', 'image' => 'samsung.jpg', 'price' => 79990],
];

$cart = processCart($products);

echo "<h2>Корзина</h2>";
foreach ($cart as $item) {
    echo "
    <div style='border: 1px solid #ddd; padding: 10px; margin: 5px;'>
        <strong>{$item['name']}</strong><br>
        Количество: {$item['count']}<br>
        Цена за единицу: {$item['price']} руб.<br>
        Общая стоимость: {$item['total_price']} руб.
    </div>";
}
