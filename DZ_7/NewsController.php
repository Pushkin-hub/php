<?php
class NewsController
{

    private $pdo;

    public function __construct()
    {
        $host = 'localhost';
        $dbname = 'news_db';
        $username = 'root';
        $password = '';

        try {
            $this->pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            die("Ошибка подключения: " . $e->getMessage());
        }
    }

    public function index()
    {
        $stmt = $this->pdo->query("SELECT * FROM news ORDER BY created_at DESC");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function show($id)
    {
        $stmt = $this->pdo->prepare("SELECT * FROM news WHERE id = ?");
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}

$controller = new NewsController();

if (isset($_GET['action']) && $_GET['action'] == 'show' && isset($_GET['id'])) {
    $news = $controller->show($_GET['id']);

    include 'newView.php';
} else {

    $news = $controller->index();
    include 'index.php';
}
