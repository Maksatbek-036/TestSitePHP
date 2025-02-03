<?php

namespace App\Router;

class Route
{
public function __construct(private string $uri, private string $method, private $action)
{
}
private static function get(string $uri, $action):static
{
    return new static($uri, 'GET', $action);
}
private static function post(string $uri, $action):static
{
    return new static($uri, 'POST', $action);
}
}
