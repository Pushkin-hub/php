<?php

$host = 'localhost';
$dbname = 'news_db';
$username = 'root';
$password = ''; 

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    $stmt = $pdo->query("SELECT * FROM news");
    $news = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
} catch(PDOException $e) {
    echo "Ошибка подключения: " . $e->getMessage();
}
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Главная - Новости</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-4">
        <h1>Последние новости</h1>
        
        <?php if (!empty($news)): ?>
            <div class="list-group">
                <?php foreach($news as $item): ?>
                    <a href="newView.php?id=<?= $item['id'] ?>" 
                       class="list-group-item list-group-item-action">
                        <div class="d-flex w-100 justify-content-between">
                            <h5 class="mb-1"><?= htmlspecialchars($item['title']) ?></h5>
                            <small><?= date('d.m.Y H:i', strtotime($item['created_at'])) ?></small>
                        </div>
                        <p class="mb-1"><?= htmlspecialchars(substr($item['content'], 0, 150)) ?>...</p>
                        <small>Нажмите для просмотра подробностей</small>
                    </a>
                <?php endforeach; ?>
            </div>
        <?php else: ?>
            <div class="alert alert-info">
                Новости пока отсутствуют.
            </div>
        <?php endif; ?>
    </div>
</body>
</html>