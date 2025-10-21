<?php
function displayProduct($name, $image, $price) {
    if (empty($name) || empty($image) || !is_numeric($price)) {
        return false;
    }
    
    $html = "
    <div class='product' style='border: 1px solid #ddd; padding: 15px; margin: 10px; text-align: center; width: 200px; display: inline-block;'>
        <h3>$name</h3>
        <img src='$image' alt='$name' style='max-width: 150px; height: auto;'>
        <p style='font-size: 18px; font-weight: bold; color: #333;'>Цена: $price руб.</p>
        <button onclick='addToCart(\"$name\", $price)' style='background-color: #4CAF50; color: white; padding: 10px 20px; border: none; border-radius: 4px; cursor: pointer;'>
            Купить
        </button>
    </div>
    ";
    
    echo $html;
    return true;
}

echo "
<script>
function addToCart(name, price) {
    alert('Товар \"' + name + '\" добавлен в корзину!');
    // Здесь может быть логика добавления в корзину
}
</script>
";

displayProduct("iPhone 15", "iphone.jpg", 99990);
