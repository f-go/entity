<?php
if (!is_file($autoloadFile = __DIR__.'/../vendor/autoload.php')) {
    throw new \LogicException('Could not find autoload.php in vendor/. Did you run "composer install --dev"?');
}

require $autoloadFile;

/**
 * Don't let tests fail on deprecated API notifications
 */
PHPUnit_Framework_Error_Deprecated::$enabled = false;