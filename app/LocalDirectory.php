<?php

namespace App;

class LocalDirectory implements Directory {
    
    public function getFiles() : array {
        $files = scandir(__DIR__ . "/../local-directory");
        return array_diff($files, ['.', '..']);
    }
}
