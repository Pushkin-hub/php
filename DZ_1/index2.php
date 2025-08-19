<?php
$questions = [
    [
        'text'   => "1. Какой язык программирования используется для веб‑страниц?",
        'options'=> ['HTML', 'CSS', 'JavaScript', 'PHP'],
        'answer'=> [false, false, false, true]
    ],
    [
        'text'   => "2. Какие из перечисленных являются языками разметки?",
        'options'=> ['HTML', 'XML', 'SQL', 'CSS'],
        'answer'=> [true, true, false, false]
    ],
    [
        'text'   => "3. Опишите назначение языка PHP в веб‑разработке.",
        'options'=> [],                          
        'answer'=> ['PHP – серверный язык программирования, который генерирует HTML, обрабатывает формы, работает с базами данных и обеспечивает динамическое содержимое веб‑страниц.']
    ]
];
?>
<!DOCTYPE html>
<html lang="ru">
<head>
<meta charset="UTF-8">
<title>Вопросы по PHP</title>
<style>
body{font-family:Arial,sans-serif;line-height:1.6;}
.question{margin-bottom:2em;}
.options{list-style:none;padding-left:0;}
.options li{margin-bottom:.5em;}
.correct{color:green;font-weight:bold;}
</style>
</head>
<body>

<?php foreach ($questions as $idx => $q): ?>
<div class="question">
    <h3><?= htmlspecialchars($q['text']); ?></h3>
    <?php if (!empty($q['options'])): ?>
        <ul class="options">
            <?php foreach ($q['options'] as $i => $opt): ?>
                <li <?= $q['answer'][$i] ? 'class="correct"' : ''; ?>>
                    <?= htmlspecialchars($opt); ?><?= $q['answer'][$i] ? ' (правильно)' : ''; ?>
                </li>
            <?php endforeach; ?>
        </ul>
    <?php else: ?>
        <p><?= nl2br(htmlspecialchars(implode("\n", $q['answer']))); ?></p>
    <?php endif; ?>
</div>
<?php endforeach; ?>

</body>
</html>
