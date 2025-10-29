<?php
require_once 'string_library.php';

$sample_string = "Пример строки для теста.";

$test_string = "Hello world! Привет мир!";

$symbol_to_find = 'е';
$count = count_char_in_string($sample_string, $symbol_to_find);

$replaced_string = replace_char_in_string($sample_string, 'и', '1');

$reversed_string = reverse_string($sample_string);

$words_array = split_string_into_words($test_string);

$test_word1 = "Мама";
$test_word2 = "Mother";

$alphabet1 = detect_alphabet($test_word1);
$alphabet2 = detect_alphabet($test_word2);
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8" />
    <title>Тестирование строковых функций</title>
</head>
<body>
<h2>Результаты работы функций</h2>

<h3>1. Подсчёт символа '<?php echo htmlspecialchars($symbol_to_find); ?>' в строке</h3>
<p>Количество: <?php echo $count; ?></p>

<h3>2. Замена символов 'и' на '1' в строке</h3>
<p>Результат: <?php echo htmlspecialchars($replaced_string); ?></p>

<h3>3. Строка задом наперёд</h3>
<p><?php echo htmlspecialchars($reversed_string); ?></p>

<h3>4. Разделение строки на слова</h3>
<ul>
<?php
foreach ($words_array as $word) {
    echo '<li>' . htmlspecialchars($word) . '</li>';
}
?>
</ul>

<h3>5. Определение алфавита слова</h3>
<p>Слово '<?php echo htmlspecialchars($test_word1); ?>' написано на <?php echo $alphabet1; ?>.</p>
<p>Слово '<?php echo htmlspecialchars($test_word2); ?>' написано на <?php echo $alphabet2; ?>.</p>
</body>
</html>