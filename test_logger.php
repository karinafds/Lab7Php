<?php

require __DIR__ . '/vendor/autoload.php';

use App\Logger;

$logger = new Logger('myLogger');
$logger->logInfo('This is an info log');
$logger->logError('This is an error log');
