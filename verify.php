<?php
$access_token = '6aeLneKJ+9w36JIAyH8vidEF3dKO6u0QsYB4nlMmAtYh6/glfGqyO704L9cDIjSIqfte9PJitw7KtOJNYpKAJzWYixyu5O7Lm9YqMFpHUh+COF9gtNaRXeA9wKgOQsBzaX50F5TcrFEPaIqlO7AJoQdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
