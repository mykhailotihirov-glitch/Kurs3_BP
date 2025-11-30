<?php
if (isset($_POST["text"])) {
    $newText = $_POST["text"];
    
    // Запис тексту у файл
    file_put_contents("text.txt", $newText);
    // На головну
    header("Location: index.php");
    exit();
}
?>
