<?php
session_start();
require_once 'Category.php';

class LoginController {
    private $db;
    
    public function __construct() {
        $this->connectDB();
    }
    
    private function connectDB() {
        $host = 'localhost';
        $dbname = 'your_database_name';
        $username = 'your_username';
        $password = 'your_password';
        
        try {
            $this->db = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
            $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch(PDOException $e) {
            die("Connection failed: " . $e->getMessage());
        }
    }
    
    public function showLoginView() {
        require_once 'loginView.php';
    }

    public function requestCode($email) {

        $code = rand(100000, 999999);
        
        $stmt = $this->db->prepare("INSERT INTO Users (email, code) VALUES (:email, :code)");
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':code', $code);
        $stmt->execute();

        echo "<script>alert('Код отправлен: $code');</script>";

        
        return $code;
    }
    
    public function verifyCode($email, $code) {
        $stmt = $this->db->prepare("SELECT * FROM Users WHERE email = :email AND code = :code ORDER BY created_at DESC LIMIT 1");
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':code', $code);
        $stmt->execute();
        
        $user = $stmt->fetch(PDO::FETCH_ASSOC);
        
        if ($user) {
            $_SESSION['user_email'] = $email;
            $_SESSION['logged_in'] = true;
            return true;
        }
        
        return false;
    }
    
    private function sendSMS($email, $code) {
        error_log("SMS sent to $email with code: $code");
    }
    
    public function logout() {
        session_destroy();
        header('Location: loginView.php');
        exit;
    }
}

$controller = new LoginController();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['request_code'])) {
        $email = $_POST['email'];
        $controller->requestCode($email);
    } elseif (isset($_POST['login'])) {
        $email = $_POST['email'];
        $code = $_POST['code'];
        
        if ($controller->verifyCode($email, $code)) {
            header('Location: news.php');
            exit;
        } else {
            echo "<script>alert('Неверный код!');</script>";
        }
    }
}

if (isset($_GET['action']) && $_GET['action'] === 'logout') {
    $controller->logout();
}
