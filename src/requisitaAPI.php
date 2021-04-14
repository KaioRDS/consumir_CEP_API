<?php
$url =  $_POST['url'];

$ch = curl_init();

curl_setopt($ch , CURLOPT_URL , $url);
curl_setopt($ch , CURLOPT_RETURNTRANSFER, TRUE);

$resposta = curl_exec($ch);
curl_close($ch);

echo ($resposta);
