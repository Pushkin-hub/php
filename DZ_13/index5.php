<?php
session_start();
require_once 'loginController.php';
require_once 'Category.php';

if (!isset($_SESSION['logged_in']) || !$_SESSION['logged_in']) {
    header('Location: loginView.php');
    exit;
}

$categories = [
    new Category('Электроника', ['iPhone', 'MacBook', 'iPad']),
    new Category('Одежда', ['Футболки', 'Джинсы', 'Куртки']),
    new Category('Книги', ['Художественная литература', 'Научная литература', 'Детские книги'])
];
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Новости</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f5f5f5;
        }
        .header {
            background-color: #333;
            color: white;
            padding: 15px 30px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .user-info {
            font-size: 14px;
        }
        .logout-btn {
            color: white;
            text-decoration: none;
            margin-left: 20px;
        }
        .container {
            max-width: 1200px;
            margin: 30px auto;
            padding: 0 20px;
        }
        .categories {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 20px;
        }
        .category {
            background: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }
        .category h3 {
            color: #333;
            border-bottom: 2px solid #007bff;
            padding-bottom: 10px;
        }
        .products {
            list-style-type: none;
            padding: 0;
        }
        .products li {
            padding: 8px 0;
            border-bottom: 1px solid #eee;
        }
        .products li:last-child {
            border-bottom: none;
        }
    </style>
</head>
<body>
    <div class="header">
        <h1>Новости и категории</h1>
        <div class="user-info">
            Пользователь: <?php echo htmlspecialchars($_SESSION['user_email']); ?>
            <a href="loginController.php?action=logout" class="logout-btn">Выйти</a>
        </div>
    </div>
    
    <div class="container">
        <h2>Категории товаров</h2>
        <div class="categories">
            <?php foreach ($categories as $category): ?>
                <div class="category">
                    <h3><?php echo $category->getCategoryName(); ?></h3>
                    <ul class="products">
                        <?php foreach ($category->getCategoryProducts() as $product): ?>
                            <li><?php echo htmlspecialchars($product); ?></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</body>
</html>