<?php
$client = new Client();
$headers = [
  'Content-Type' => 'application/x-www-form-urlencoded'
];
$options = [
'form_params' => [
  'name' => 'myname',
  'email' => 'example@mail.com',
  'password' => 'mypassword'
]];
$request = new Request('POST', 'https://iraninic.com/api/register', $headers);
$res = $client->sendAsync($request, $options)->wait();
echo $res->getBody();
