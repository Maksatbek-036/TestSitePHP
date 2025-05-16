<?php

namespace App\Kernel\Http;

use App\Kernel\Upload\UploadedFileInterface;
use App\Kernel\Validator\ValidatorInterface;

interface RequestInterface
{
   
   public static function createFromGlobals(): static;
   public function Uri(): string;
   public function method(): string;
   public function input(string $key, $default = null): mixed;
   public function setValidator(ValidatorInterface $validator): void;
   public function validate(array $rules): bool;
   public function errors(): array;
   public function file(string $key):?UploadedFileInterface;
   
}