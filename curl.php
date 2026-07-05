<?php

$fp = fopen(__DIR__ . '/curl.log', 'a');

$postData = [
    'username' => 'john_doe',
    'email'    => 'john@example.com'
];

$ch = curl_init('https://httpbin.org/post');

curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($postData));

curl_setopt($ch, CURLOPT_VERBOSE, true);
curl_setopt($ch, CURLOPT_STDERR, $fp);

curl_exec($ch);

curl_close($ch);
fclose($fp);
