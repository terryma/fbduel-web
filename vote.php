<?php
require_once 'config.php';

$user = $facebook->api('/me');
$user = $user['id'];
$left = $_GET['l'];
$right = $_GET['r'];
$winner = $_GET['w'];
echo "http://localhost/fbduel/vote/${user}/${left}/${right}/${winner}";
$ch = curl_init("http://localhost/fbduel/vote/${user}/${left}/${right}/${winner}");
$data = curl_exec($ch);
curl_close($ch);
