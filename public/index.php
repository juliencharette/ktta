<?php

include __DIR__ . '/../vendor/autoload.php';

$kirby = new Kirby([
    'roots' => [
        'index'    => __DIR__,
        'base'     => $base    = dirname(__DIR__),
        'site'     => $base . '/site',
        'storage'  => $storage = $base . '/storage',
        'content'  => $storage . '/content',
        'accounts' => $storage . '/accounts',
        'cache'    => $storage . '/cache',
        'sessions' => $storage . '/sessions',
        'media'    => $storage . '/media',
    ]
]);

if (!file_exists(__DIR__ . '/media')) {
    symlink($kirby->roots()->media(), __DIR__ . '/media');
}

echo $kirby->render();
