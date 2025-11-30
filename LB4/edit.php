<?php
  $content = file_get_contents("text.txt");
?>

<!DOCTYPE html>
<html lang="uk">
<head>
  <meta charset="UTF-8">
  <title>Редагування тексту</title>
</head>
<body>

<h1>Редагування текстового файлу</h1>

<form action="save.php" method="POST">
  <textarea name="text" rows="15" cols="80"><?php echo htmlspecialchars($content); ?></textarea>
  <br><br>
  <button type="submit">Зберегти</button>
</form>

</body>
</html>
