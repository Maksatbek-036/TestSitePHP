<?php

namespace App\Kernel\Upload;

interface UploadInterface
{
    public function move(string $path,string $fileName=null):string|false;
    public function getExtension():string;
}