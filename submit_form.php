<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST["name"]);
    $email = htmlspecialchars($_POST["email"]);
    $message = htmlspecialchars($_POST["message"]);

    // Тук може да добавите код за записване в база данни или изпращане на имейл
    // Например, изпращане на имейл:
    // mail("your-email@example.com", "Нова оферта от $name", $message, "From: $email");

    echo "<h2>Благодарим Ви!</h2>";
    echo "<p>Скоро ще се свържем с Вас.</p>";
} else {
    echo "<p>Невалидна заявка.</p>";
}
?>
