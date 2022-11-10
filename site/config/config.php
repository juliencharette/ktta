<?php

return [
    'error'     => '404',
    'languages' => true,

    'arnoson.kirby-vite.entry'  => 'app.js',

    'amteich.twig.env.functions' => [
        'vite' => 'vite'
    ],

    'cache' => [
        'pages' => [
            'type'   => 'php',
            'active' => true
        ]
    ],
];
