<?php

use Acme\Application;

require_once __DIR__ . "/vendor/autoload.php";

$application = Application::getInstance();

require_once __DIR__. "/resources/commands.php";

$application->run();
