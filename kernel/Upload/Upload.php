<?php

namespace App\Kernel\Upload;
use App\Kernel\Upload\UploadInterface;

class Upload implements UploadInterface
{
    public function __construct(
        private readonly string $name,
        public readonly string $type,
        public readonly string  $tmpName,
        public readonly int $error,
        public readonly int $size
    )
    {
        // Constructor logic here
    }

   public function move(string $path,string $fileName=null): string|false
   {
$storagePath=APP_ROOT."/storage/$path";
if(! is_dir(!$storagePath)){
    mkdir($storagePath,0777,true);
}
$fileName=$filename ?? $this->name;

$filePath="$storagePath/$path/$fileName";

if (move_uploaded_file($this->tmpName,$filePath)){
    return $fileName;
}
return false;
   }
   public function randomFileName():string{
return md5(uniqid(rand()),true).$this->getExtension();
   }
   public function getExtension(): string
   {
    return pathinfo($this->name,PATHINFO_EXTENSION);
   }
}