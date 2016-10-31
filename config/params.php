<?php
$assets = @file_get_contents(__DIR__ . '/../web/assets/rev-manifest.json');
$assets = (array)json_decode($assets);

return [
    'adminEmail' => 'ckwork100@gmail.com',
    'user.tokenExpire' => 100,
    'assets' => $assets
];
