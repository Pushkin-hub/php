CREATE DATABASE news.db;
USE news.db;
CREATE TABLE news (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    content TEXT NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

-- Тестовые данные
INSERT INTO news (title, content) VALUES 
('Первая новость', 'Это полное содержание первой новости. Здесь может быть подробный текст с описанием события.'),
('Вторая новость', 'Это содержание второй новости. Текст для демонстрации работы страницы.'),
('Третья новость', 'Это содержание третьей новости с более подробным описанием событий.');