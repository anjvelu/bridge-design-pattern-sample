<?php

namespace App;

class FileViewer implements FileManager
{
    function __construct(private Directory $directory) {}

    public function viewDirectoryContent() : array {
        return $this->directory->getFiles();
    }
}
