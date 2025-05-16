<?php

namespace App\Kernel\Storage;

class Storage implements StorageInterface
{
    public function get(string $path):string
    {
        return file_get_contents(APP_ROOT."\storage\\$path");
    }
    public function url(string $path):string
    {
        return "";

    }
}