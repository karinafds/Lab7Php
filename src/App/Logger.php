<?php

namespace App;

use Monolog\Logger as MonologLogger;
use Monolog\Handler\StreamHandler;

class Logger
{
    private $logger;

    public function __construct($name)
    {
        $this->logger = new MonologLogger($name);

        // Log info messages to app.log
        $this->logger->pushHandler(new StreamHandler(__DIR__ . '/../logs/app.log', MonologLogger::INFO));
        
        // Log error messages to error.log
        $this->logger->pushHandler(new StreamHandler(__DIR__ . '/../logs/error.log', MonologLogger::ERROR));
    }

    public function logInfo($message)
    {
        $this->logger->info($message);
    }

    public function logError($message)
    {
        $this->logger->error($message);
    }
}
