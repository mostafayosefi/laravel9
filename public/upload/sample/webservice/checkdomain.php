<?php
$client = new Client();
$headers = [
  'Content-Type' => 'application/x-www-form-urlencoded'
];
$options = [
'form_params' => [
  'domain' => 'example.com'
]];
$request = new Request('POST', 'http://127.0.0.1:8000/api/checkdomain', $headers);
$res = $client->sendAsync($request, $options)->wait();
echo $res->getBody();
