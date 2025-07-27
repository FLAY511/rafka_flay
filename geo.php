<?php
$ip = $_SERVER['REMOTE_ADDR'];
$details = json_decode(file_get_contents("http://ip-api.com/json/$ip"), true);

echo json_encode([
    "ip" => $ip,
    "country" => $details["country"],
    "region" => $details["regionName"],
    "city" => $details["city"],
    "org" => $details["org"]
]);
?>
