<?php

$url = 'https://jsonplaceholder.typicode.com/users';
// Sample example to get data.

//$resource = curl_init($url);
//
//curl_setopt($resource, CURLOPT_RETURNTRANSFER, true);
//
//$result = curl_exec($resource);

// Get response status code

//$info = curl_getinfo($resource, CURLINFO_HTTP_CODE);

//curl_close($resource);

//echo '<pre>';
//var_dump($info);
//echo '</pre>';
//
//echo $result;

// set_opt_array

// Post request

$resource = curl_init();

$user = [
    'name' => 'John Doe',
    'username' => 'john',
    'email' => 'john@example.com'
];

curl_setopt_array($resource, [
    CURLOPT_URL => $url,
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_POST => true,
    CURLOPT_HTTPHEADER => [
        'content-type: application/json'
    ],
    CURLOPT_POSTFIELDS => json_encode($user)
]);

$result = curl_exec($resource);

curl_close($resource);

echo $result;