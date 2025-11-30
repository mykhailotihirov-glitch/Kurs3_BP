<?php
  $content = file_get_contents("text.txt");
?>

<!DOCTYPE html>
<html lang="uk">
<head>
  <meta charset="UTF-8">
  <title>Лаба 4 — PHP</title>
</head>
<body>

<h1>Текст зі сторінки</h1>

<p><?php echo nl2br($content); ?></p>

<hr>

<a href="edit.php">Редагувати текст</a>

</body>
</html>
