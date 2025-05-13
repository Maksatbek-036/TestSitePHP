<?php

namespace App\Kernel\Http;

use App\Kernel\Validator\Validator;
use App\Kernel\Validator\ValidatorInterface;

class Request implements RequestInterface
{
   private ValidatorInterface $validator;
   public function __construct(
      public readonly array $get = [],
      public readonly array $post = [],
      public readonly array $files = [],
      public readonly array $cookies = [],
      public readonly array $server = [],

   ) {}
   public static function createFromGlobals(): static
   {
      return new static($_GET, $_POST, $_FILES, $_COOKIE, $_SERVER);
   }
   public function Uri(): string
   {
      return $this->server['REQUEST_URI'];
   }
   public function method(): string
   {
      return $this->server['REQUEST_METHOD'];
   }
   public function input(string $key, $default = null): mixed
   {
      return $this->post[$key] ?? $this->get[$key] ?? $default;
   }

   public function file(string $key):?array
   {
      return $this->files[$key] ?? null;
   }


   public function setValidator(ValidatorInterface $validator): void
   {
      $this->validator = $validator;
   }
   public function validate(array $rules): bool
   {
      $data = [];
      foreach ($rules as $key => $rule) {
         $data[$key] = $this->input($key);
      }
      return $this->validator->validate($data, $rules);
   }
   public function errors(): array
   {
      return $this->validator->errors();
   }
}
