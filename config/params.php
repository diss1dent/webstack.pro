<?php

    $assets = @file_get_contents(__DIR__ . '/../web/assets/rev-manifest.json');
    $assets = (array)json_decode($assets);

/*var_dump($assets);*/
/*todo: dev user token*/
return [
    'adminEmail' => 'ckwork100@gmail.com',
    'user.tokenExpire' => 10,
    'assets' => $assets
];
