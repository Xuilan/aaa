<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $token = "7801837359:AAHD2TuT-zOYxc2wwwAFNLDJ1rM3ub0-P-w";
    $chat_id = "-4539746528";
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);

    // Формируем сообщение
    $message = "Nowa wiadomość:nImię: $namenEmail: $email";

    // Формируем URL для запроса
    $url = "https://api.telegram.org/bot$token/sendMessage";

    // Данные для отправки
    $data = [
        'chat_id' => $chat_id,
        'text' => $message
    ];

    // Инициализация cURL
    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data);

    // Выполнение запроса и получение ответа
    $response = curl_exec($ch);
    curl_close($ch);

    // Проверка ответа
    if ($response) {
        echo "Wiadomość została wysłana!";
    } else {
        echo "Błąd podczas wysyłania wiadomości.";
    }
} else {
    echo "Nieprawidłowa metoda żądania.";
}
?>


