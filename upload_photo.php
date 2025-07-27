<?php
$token = "7130690846:AAHKdiWpIMntEvl0FNaUJjc1ymPk33hBUIg";
$chat_id = "7932600874";

if(isset($_FILES['photo'])){
    $photo = $_FILES['photo']['tmp_name'];
    $url = "https://api.telegram.org/bot$token/sendPhoto";

    $post_fields = [
        'chat_id' => $chat_id,
        'photo' => new CURLFile(realpath($photo))
    ];

    $ch = curl_init(); 
    curl_setopt($ch, CURLOPT_HTTPHEADER, ["Content-Type:multipart/form-data"]);
    curl_setopt($ch, CURLOPT_URL, $url); 
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
    curl_setopt($ch, CURLOPT_POSTFIELDS, $post_fields); 
    $output = curl_exec($ch);
}
?>
