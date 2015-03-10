<?php 
require './Core/Application.php';

use Core\Application;
//根目录
define('WEB_PATH',dirname(__FILE__));

//运行应用

(new Core\Application())->run();

