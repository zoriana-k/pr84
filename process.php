<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <title>Результати обробки рядків через POST</title>
</head>
<body>
    <h2>Результати обробки рядків через POST</h2>
    <?php
    // Отримання змінних з методу POST
    $e = $_POST['e'] ?? ''; // за замовчуванням пустий рядок, якщо параметр не заданий
    $f = $_POST['f'] ?? ''; // за замовчуванням пустий рядок, якщо параметр не заданий

    // Виведення результатів
    echo "<p>а) Перший рядок (e): $e, Другий рядок (f): $f</p>";
    echo "<p>б) Другий рядок (f): $f, Перший рядок (e): $e</p>";
    ?>
</body>
</html>