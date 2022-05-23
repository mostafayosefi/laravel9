<?php
$client = new Client();
$headers = [
  'Content-Type' => 'application/x-www-form-urlencoded'
];
$options = [
'form_params' => [
  'email' => 'example@mail.com',
  'password' => 'mypassword'
]];
$request = new Request('POST', 'https://iraninic.com/api/login', $headers);
$res = $client->sendAsync($request, $options)->wait();
echo $res->getBody();