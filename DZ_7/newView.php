<?php
if (!isset($_GET['id'])) {
    header("Location: index.php");
    exit;
}

$id = (int)$_GET['id'];

$host = 'localhost';
$dbname = 'news_db';
$username = 'root';
$password = ''; 

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    $stmt = $pdo->prepare("SELECT * FROM news WHERE id = ?");
    $stmt->execute([$id]);
    $news = $stmt->fetch(PDO::FETCH_ASSOC);
    
    if (!$news) {
        echo "Новость не найдена!";
        exit;
    }
    
} catch(PDOException $e) {
    echo "Ошибка подключения: " . $e->getMessage();
    exit;
}
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars($news['title']) ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-4">
        <a href="index.php" class="btn btn-secondary mb-3">
            ← Назад к списку новостей
        </a>
        
        <div class="card">
            <div class="card-header">
                <h1 class="card-title"><?= htmlspecialchars($news['title']) ?></h1>
                <small class="text-muted">
                    Опубликовано: <?= date('d.m.Y в H:i', strtotime($news['created_at'])) ?>
                </small>
            </div>
            <div class="card-body">
                <p class="card-text" style="white-space: pre-line;"><?= htmlspecialchars($news['content']) ?></p>
            </div>
            <div class="card-footer text-muted">
                Последнее обновление: <?= date('d.m.Y в H:i', strtotime($news['updated_at'])) ?>
            </div>
        </div>
    </div>
</body>
</html>
