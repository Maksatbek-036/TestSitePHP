<?php

namespace App\Kernel\Config;
use App\Kernel\Config\ConfigInterface;
class Config implements ConfigInterface
{
 public function get(string $key, $default=null)
 {
    [$file, $key] = explode('.', $key);
    $configPath= require_once APP_ROOT . "/$file.php";
    if (! file_exists($configPath)) {
        return $default;
    }
    $config = require_once $configPath;
    return $config[$key] ?? $default;
 }
}