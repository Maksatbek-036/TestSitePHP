<?php 
define('APP_ROOT',dirname(__DIR__));
require_once APP_ROOT.'\vendor\autoload.php';
use App\Kernel\App;
$app = new App();
$app->run();
