<?php
session_start();

// База вопросов
$questions = [
    'page1' => [
        [
            'question' => "Какой язык программирования используется для веб-разработки?",
            'options' => ["Java", "PHP", "C++", "Python"],
            'correct' => 1
        ],
        [
            'question' => "Что означает HTML?",
            'options' => ["Hyper Text Markup Language", "High Tech Modern Language", "Hyper Transfer Markup Language", "Home Tool Markup Language"],
            'correct' => 0
        ],
        [
            'question' => "Какой тег используется для создания ссылки?",
            'options' => ["<link>", "<a>", "<href>", "<url>"],
            'correct' => 1
        ],
        [
            'question' => "Что такое CSS?",
            'options' => ["Computer Style Sheets", "Creative Style System", "Cascading Style Sheets", "Colorful Style Sheets"],
            'correct' => 2
        ],
        [
            'question' => "Какой метод HTTP используется для отправки данных?",
            'options' => ["GET", "POST", "PUT", "DELETE"],
            'correct' => 1
        ],
        [
            'question' => "Что такое JavaScript?",
            'options' => ["Компилируемый язык", "Язык разметки", "Скриптовый язык", "База данных"],
            'correct' => 2
        ],
        [
            'question' => "Как объявить переменную в JavaScript?",
            'options' => ["variable", "var", "v", "let"],
            'correct' => 3
        ],
        [
            'question' => "Что такое AJAX?",
            'options' => ["Another JavaScript XML", "Asynchronous JavaScript and XML", "Advanced JavaScript and XHTML", "Automated JavaScript XML"],
            'correct' => 1
        ],
        [
            'question' => "Какой символ используется для комментариев в PHP?",
            'options' => ["//", "/* */", "#", "Все вышеперечисленные"],
            'correct' => 3
        ],
        [
            'question' => "Что такое MySQL?",
            'options' => ["Язык программирования", "Система управления базами данных", "Фреймворк", "Операционная система"],
            'correct' => 1
        ]
    ],
    'page2' => [
        [
            'question' => "Какие из перечисленных являются фронтенд-технологиями?",
            'options' => ["HTML", "PHP", "CSS", "MySQL", "JavaScript"],
            'correct' => [0, 2, 4]
        ],
        [
            'question' => "Какие методы HTTP являются идемпотентными?",
            'options' => ["GET", "POST", "PUT", "DELETE", "PATCH"],
            'correct' => [0, 2, 3]
        ],
        [
            'question' => "Какие типы данных есть в PHP?",
            'options' => ["string", "integer", "float", "boolean", "array"],
            'correct' => [0, 1, 2, 3, 4]
        ],
        [
            'question' => "Какие из этих тегов являются блочными?",
            'options' => ["<div>", "<span>", "<p>", "<a>", "<h1>"],
            'correct' => [0, 2, 4]
        ],
        [
            'question' => "Какие операторы сравнения в PHP?",
            'options' => ["==", "===", "!=", "!==", "<>"],
            'correct' => [0, 1, 2, 3, 4]
        ],
        [
            'question' => "Какие способы создания массива в PHP?",
            'options' => ["array()", "[]", "new Array()", "{}", "list()"],
            'correct' => [0, 1]
        ],
        [
            'question' => "Какие функции для работы со строками в PHP?",
            'options' => ["strlen()", "strpos()", "substr()", "explode()", "implode()"],
            'correct' => [0, 1, 2, 3, 4]
        ],
        [
            'question' => "Какие циклы есть в JavaScript?",
            'options' => ["for", "while", "do-while", "foreach", "loop"],
            'correct' => [0, 1, 2]
        ],
        [
            'question' => "Какие события мыши в JavaScript?",
            'options' => ["click", "mouseover", "keypress", "submit", "load"],
            'correct' => [0, 1]
        ],
        [
            'question' => "Какие способы подключения CSS?",
            'options' => ["Встроенные стили", "Внутренние стили", "Внешние стили", "Импорт", "Все вышеперечисленные"],
            'correct' => [0, 1, 2, 3, 4]
        ]
    ],
    'page3' => [
        [
            'question' => "Какой функции PHP используется для вывода текста?",
            'answer' => "echo"
        ],
        [
            'question' => "Какой оператор используется для конкатенации строк в PHP?",
            'answer' => "."
        ],
        [
            'question' => "Какой символ используется для начала переменной в PHP?",
            'answer' => "$"
        ],
        [
            'question' => "Какой функции используется для получения длины строки в PHP?",
            'answer' => "strlen"
        ],
        [
            'question' => "Какой метод используется для отправки AJAX запроса в чистом JavaScript?",
            'answer' => "XMLHttpRequest"
        ],
        [
            'question' => "Какой оператор используется для строгого сравнения в JavaScript?",
            'answer' => "==="
        ],
        [
            'question' => "Какой тег используется для подключения JavaScript?",
            'answer' => "script"
        ],
        [
            'question' => "Какой свойство CSS используется для изменения цвета текста?",
            'answer' => "color"
        ],
        [
            'question' => "Какой функция используется для округления числа в JavaScript?",
            'answer' => "Math.round"
        ],
        [
            'question' => "Какой оператор используется для объединения массивов в PHP?",
            'answer' => "array_merge"
        ]
    ]
];

// Инициализация сессии
if (!isset($_SESSION['initialized'])) {
    $_SESSION['initialized'] = true;
    $_SESSION['page1_score'] = 0;
    $_SESSION['page2_score'] = 0;
    $_SESSION['page3_score'] = 0;
    $_SESSION['current_page'] = 1;
    $_SESSION['shuffled_questions'] = shuffleQuestions($questions);
}

// Функция перемешивания вопросов
function shuffleQuestions($questions) {
    $shuffled = $questions;
    foreach ($shuffled as $page => $pageQuestions) {
        shuffle($shuffled[$page]);
    }
    return $shuffled;
}

// Обработка отправки формы
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['restart'])) {
        session_destroy();
        header("Location: " . $_SERVER['PHP_SELF']);
        exit;
    }
    
    if (isset($_POST['next_page1'])) {
        if (validatePage1($_POST)) {
            $_SESSION['page1_score'] = calculatePage1Score($_POST);
            $_SESSION['current_page'] = 2;
        }
    } elseif (isset($_POST['next_page2'])) {
        if (validatePage2($_POST)) {
            $_SESSION['page2_score'] = calculatePage2Score($_POST);
            $_SESSION['current_page'] = 3;
        }
    } elseif (isset($_POST['finish'])) {
        if (validatePage3($_POST)) {
            $_SESSION['page3_score'] = calculatePage3Score($_POST);
            $_SESSION['current_page'] = 'result';
        }
    } elseif (isset($_POST['prev_page2'])) {
        $_SESSION['current_page'] = 1;
    } elseif (isset($_POST['prev_page3'])) {
        $_SESSION['current_page'] = 2;
    }
}

// Валидация страницы 1
function validatePage1($post) {
    $shuffled = $_SESSION['shuffled_questions']['page1'];
    foreach ($shuffled as $index => $question) {
        if (!isset($post["q1_$index"])) {
            $_SESSION['validation_error'] = "Пожалуйста, ответьте на все вопросы на странице 1!";
            return false;
        }
    }
    unset($_SESSION['validation_error']);
    return true;
}

// Расчет баллов страницы 1
function calculatePage1Score($post) {
    $score = 0;
    $shuffled = $_SESSION['shuffled_questions']['page1'];
    foreach ($shuffled as $index => $question) {
        if (isset($post["q1_$index"]) && $post["q1_$index"] == $question['correct']) {
            $score += 1; // 1 балл за вопрос
        }
    }
    return $score;
}

// Валидация страницы 2
function validatePage2($post) {
    $shuffled = $_SESSION['shuffled_questions']['page2'];
    foreach ($shuffled as $index => $question) {
        if (!isset($post["q2_$index"])) {
            $_SESSION['validation_error'] = "Пожалуйста, ответьте на все вопросы на странице 2!";
            return false;
        }
    }
    unset($_SESSION['validation_error']);
    return true;
}

// Расчет баллов страницы 2
function calculatePage2Score($post) {
    $score = 0;
    $shuffled = $_SESSION['shuffled_questions']['page2'];
    foreach ($shuffled as $index => $question) {
        if (isset($post["q2_$index"])) {
            $userAnswers = is_array($post["q2_$index"]) ? $post["q2_$index"] : [$post["q2_$index"]];
            $userAnswers = array_map('intval', $userAnswers);
            sort($userAnswers);
            sort($question['correct']);
            
            if ($userAnswers == $question['correct']) {
                $score += 3; // 3 балла за вопрос
            }
        }
    }
    return $score;
}

// Валидация страницы 3
function validatePage3($post) {
    $shuffled = $_SESSION['shuffled_questions']['page3'];
    foreach ($shuffled as $index => $question) {
        if (!isset($post["q3_$index"]) || empty(trim($post["q3_$index"]))) {
            $_SESSION['validation_error'] = "Пожалуйста, ответьте на все вопросы на странице 3!";
            return false;
        }
    }
    unset($_SESSION['validation_error']);
    return true;
}

// Расчет баллов страницы 3
function calculatePage3Score($post) {
    $score = 0;
    $shuffled = $_SESSION['shuffled_questions']['page3'];
    foreach ($shuffled as $index => $question) {
        if (isset($post["q3_$index"])) {
            $userAnswer = trim(strtolower($post["q3_$index"]));
            $correctAnswer = strtolower($question['answer']);
            
            if ($userAnswer === $correctAnswer) {
                $score += 5; // 5 баллов за вопрос
            }
        }
    }
    return $score;
}
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Система тестирования</title>
    <style>
        * { box-sizing: border-box; margin: 0; padding: 0; }
        body { font-family: Arial, sans-serif; background: #f5f5f5; padding: 20px; }
        .container { max-width: 800px; margin: 0 auto; background: white; padding: 30px; border-radius: 10px; box-shadow: 0 0 10px rgba(0,0,0,0.1); }
        .page { display: none; }
        .active { display: block; }
        .question { margin-bottom: 20px; padding: 15px; border: 1px solid #ddd; border-radius: 5px; }
        .question h3 { margin-bottom: 10px; color: #333; }
        .options label { display: block; margin: 5px 0; padding: 8px; cursor: pointer; }
        .options label:hover { background: #f0f0f0; }
        .btn { padding: 10px 20px; margin: 10px 5px; border: none; border-radius: 5px; cursor: pointer; }
        .btn-primary { background: #007bff; color: white; }
        .btn-secondary { background: #6c757d; color: white; }
        .btn-success { background: #28a745; color: white; }
        .progress { margin: 20px 0; height: 10px; background: #e9ecef; border-radius: 5px; overflow: hidden; }
        .progress-bar { height: 100%; background: #007bff; transition: width 0.3s; }
        .warning { color: #dc3545; margin: 10px 0; padding: 10px; background: #f8d7da; border: 1px solid #f5c6cb; border-radius: 5px; }
        .result-page { text-align: center; }
        .score { font-size: 2em; color: #007bff; margin: 20px 0; }
    </style>
</head>
<body>
    <div class="container">
        <?php if (isset($_SESSION['validation_error'])): ?>
            <div class="warning"><?php echo $_SESSION['validation_error']; ?></div>
        <?php endif; ?>

        <!-- Страница 1: Одиночный выбор -->
        <div id="page1" class="page <?php echo ($_SESSION['current_page'] == 1) ? 'active' : ''; ?>">
            <h2>Страница 1: Выберите один правильный ответ</h2>
            <div class="progress">
                <div class="progress-bar" style="width: 0%"></div>
            </div>
            
            <form method="POST">
                <?php foreach ($_SESSION['shuffled_questions']['page1'] as $index => $question): ?>
                    <div class="question">
                        <h3>Вопрос <?php echo $index + 1; ?>: <?php echo $question['question']; ?></h3>
                        <div class="options">
                            <?php foreach ($question['options'] as $optIndex => $option): ?>
                                <label>
                                    <input type="radio" name="q1_<?php echo $index; ?>" value="<?php echo $optIndex; ?>">
                                    <?php echo $option; ?>
                                </label>
                            <?php endforeach; ?>
                        </div>
                    </div>
                <?php endforeach; ?>
                
                <button type="submit" name="next_page1" class="btn btn-primary">Next</button>
            </form>
        </div>

        <!-- Страница 2: Множественный выбор -->
        <div id="page2" class="page <?php echo ($_SESSION['current_page'] == 2) ? 'active' : ''; ?>">
            <h2>Страница 2: Выберите все правильные ответы</h2>
            <div class="progress">
                <div class="progress-bar" style="width: 33%"></div>
            </div>
            
            <form method="POST">
                <?php foreach ($_SESSION['shuffled_questions']['page2'] as $index => $question): ?>
                    <div class="question">
                        <h3>Вопрос <?php echo $index + 1; ?>: <?php echo $question['question']; ?></h3>
                        <div class="options">
                            <?php foreach ($question['options'] as $optIndex => $option): ?>
                                <label>
                                    <input type="checkbox" name="q2_<?php echo $index; ?>[]" value="<?php echo $optIndex; ?>">
                                    <?php echo $option; ?>
                                </label>
                            <?php endforeach; ?>
                        </div>
                    </div>
                <?php endforeach; ?>
                
                <button type="submit" name="prev_page2" class="btn btn-secondary">Назад</button>
                <button type="submit" name="next_page2" class="btn btn-primary">Next</button>
            </form>
        </div>

        <!-- Страница 3: Текстовые ответы -->
        <div id="page3" class="page <?php echo ($_SESSION['current_page'] == 3) ? 'active' : ''; ?>">
            <h2>Страница 3: Введите ответы</h2>
            <div class="progress">
                <div class="progress-bar" style="width: 66%"></div>
            </div>
            
            <form method="POST">
                <?php foreach ($_SESSION['shuffled_questions']['page3'] as $index => $question): ?>
                    <div class="question">
                        <h3>Вопрос <?php echo $index + 1; ?>: <?php echo $question['question']; ?></h3>
                        <input type="text" name="q3_<?php echo $index; ?>" placeholder="Введите ваш ответ" style="width: 100%; padding: 8px; margin-top: 5px;">
                    </div>
                <?php endforeach; ?>
                
                <button type="submit" name="prev_page3" class="btn btn-secondary">Назад</button>
                <button type="submit" name="finish" class="btn btn-success">Finish</button>
            </form>
        </div>

        <!-- Страница результатов -->
        <div id="resultPage" class="page <?php echo ($_SESSION['current_page'] == 'result') ? 'active' : ''; ?> result-page">
            <h2>Результаты тестирования</h2>
            
            <?php
            $totalScore = $_SESSION['page1_score'] + $_SESSION['page2_score'] + $_SESSION['page3_score'];
            $maxScore = 10 + (10 * 3) + (10 * 5); // 10 + 30 + 50 = 90
            $percentage = ($totalScore / $maxScore) * 100;
            ?>
            
            <div class="score"><?php echo $totalScore; ?> баллов (<?php echo number_format($percentage, 1); ?>%)</div>
            
            <p><strong>Детализация:</strong></p>
            <p>Страница 1: <?php echo $_SESSION['page1_score']; ?> из 10 баллов</p>
            <p>Страница 2: <?php echo $_SESSION['page2_score']; ?> из 30 баллов</p>
            <p>Страница 3: <?php echo $_SESSION['page3_score']; ?> из 50 баллов</p>
            
            <?php
            if ($percentage >= 90) {
                echo "<p style='color: #28a745; font-weight: bold; margin: 20px 0;'>Отлично! Вы отлично знаете материал!</p>";
            } elseif ($percentage >= 70) {
                echo "<p style='color: #17a2b8; font-weight: bold; margin: 20px 0;'>Хорошо! Вы хорошо разбираетесь в теме.</p>";
            } elseif ($percentage >= 50) {
                echo "<p style='color: #ffc107; font-weight: bold; margin: 20px 0;'>Удовлетворительно. Есть над чем поработать.</p>";
            } else {
                echo "<p style='color: #dc3545; font-weight: bold; margin: 20px 0;'>Неудовлетворительно. Рекомендуется повторить материал.</p>";
            }
            ?>
            
            <form method="POST">
                <button type="submit" name="restart" class="btn btn-primary">Начать заново</button>
            </form>
        </div>
    </div>
</body>
</html>