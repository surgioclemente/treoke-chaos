<?php
require __DIR__ . '/vendor/autoload.php';
// Setup Deepzoom
$deepzoom = Jeremytubbs\Deepzoom\DeepzoomFactory::create([
    'path' => 'public/images', // Export path for tiles
    'driver' => 'imagick', // Choose between gd and imagick support.
    'format' => 'jpg',
]);
// folder, file are optional and will default to filename
$response = $deepzoom->makeTiles('chaos.png', 'file', 'folder');

print_r($response);
