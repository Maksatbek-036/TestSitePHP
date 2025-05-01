<?php

namespace App\Kernel\Http;

class Request
{
   public function __construct(
    public readonly array $get = [],
    public readonly array $post = [],
    public readonly array $files = [],
    public readonly array $cookies = [],
    public readonly array $server = [],

   )
   {
    
   }
   public static function createFromGlobals(): static
   {
      return new static($_GET, $_POST, $_FILES, $_COOKIE, $_SERVER);
   }
   public function Uri(): string
   {
      return $this->server['REQUEST_URI'] ;
   }
   public function method(): string
   {
      return $this->server['REQUEST_METHOD'] ;
   }
   public function post(string $key): mixed
   {
      return $this->post[$key] ?? null;
   }
}