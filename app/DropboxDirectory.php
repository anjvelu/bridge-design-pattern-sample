<?php 

namespace App;

class DropboxDirectory implements Directory
{
    public function getFiles() : array
    {
        $authorizationToken = file_get_contents(__DIR__ . '/../dropbox.token');
        $client = new \Spatie\Dropbox\Client($authorizationToken);
        $response = $client->listFolder();
        return array_map(function ($item){
            return $item['path_display'];
        }, $response['entries']);
    }
}
