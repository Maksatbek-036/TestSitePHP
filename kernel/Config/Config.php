<?php

namespace App\Kernel\Config;
use App\Kernel\Config\ConfigInterface;
class Config implements ConfigInterface
{
 public function get(string $key, $default=null)
 {
    [$file, $key] = explode('.', $key);
    $configPath = APP_ROOT . '\config\\' . $file . '.php';
    if (! file_exists($configPath)) {
        return $default;
    }
    if (!file_exists($configPath)) {
        return $default;
    }
    $config = require $configPath;
    return $config[$key] ?? $default;
 }
}