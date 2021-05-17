<?php

require_once __DIR__ . '/vendor/autoload.php';

ini_set('display_errors', 1);

// $directory = new App\LocalDirectory();
// $files = $directory->getFiles();

// $directory = new App\DropboxDirectory();
// $files = $directory->getFiles();

$file_viewer = new App\FileViewer($directory);
$files = $file_viewer->viewDirectoryContent();
var_dump($files);