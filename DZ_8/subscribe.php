<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Форма подписки</title>
    <style>
        .container { max-width: 500px; margin: 50px auto; padding: 20px; border: 1px solid #ddd; border-radius: 5px; }
        .form-group { margin-bottom: 15px; }
        label { display: block; margin-bottom: 5px; }
        input[type="email"] { width: 100%; padding: 8px; border: 1px solid #ddd; }
        button { padding: 10px 20px; background: #007bff; color: white; border: none; cursor: pointer; }
        .message { margin-top: 15px; padding: 10px; border-radius: 5px; }
        .success { background: #d4edda; color: #155724; border: 1px solid #c3e6cb; }
    </style>
</head>
<body>
    <div class="container">
        <h2>Подписка на рассылку</h2>
        
        <?php
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $email = $_POST['email'] ?? '';
            $subscribe = isset($_POST['subscribe']);
            
            if ($subscribe && !empty($email)) {
                echo '<div class="message success">Thank you for subscribing!</div>';
            } else {
                // Страница обновляется
                header("Location: " . $_SERVER['PHP_SELF']);
                exit;
            }
        }
        ?>
        
        <form method="POST" action="">
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label>
                    <input type="checkbox" id="subscribe" name="subscribe">
                    Подписаться на рассылку
                </label>
            </div>
            <button type="submit" name="send">Send</button>
        </form>
    </div>
</body>
</html>