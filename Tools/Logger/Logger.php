<?php

namespace Tools\Logger;

class Logger implements LoggerInterface
{
    private string $filename;

    public function __construct($filename=null) {
        $this->filename = isset($filename) ? $filename : "log.txt";
    }

    public function emergency($message, array $context = array())
    {
        $this->log(LogLevel::EMERGENCY, $message, $context);
    }

    public function alert($message, array $context = array())
    {
        $this->log(LogLevel::ALERT, $message, $context);
    }

    public function critical($message, array $context = array())
    {
        $this->log(LogLevel::CRITICAL, $message, $context);
    }

    public function error($message, array $context = array())
    {
        $this->log(LogLevel::ERROR, $message, $context);
    }

    public function warning($message, array $context = array())
    {
        $this->log(LogLevel::WARNING, $message, $context);
    }

    public function notice($message, array $context = array())
    {
        $this->log(LogLevel::NOTICE, $message, $context);
    }

    public function info($message, array $context = array())
    {
        $this->log(LogLevel::INFO, $message, $context);
    }

    public function debug($message, array $context = array())
    {
        $this->log(LogLevel::DEBUG, $message, $context);
    }

    public function log($level, $message, array $context = array())
    {
        $path = __DIR__ . DIRECTORY_SEPARATOR . 'logs' . DIRECTORY_SEPARATOR . $this->filename;
        $msg = "LOG LEVEL:\t" . $level . "\n" . "LOG MESSAGE:\t" . $message . "\n" .
            "LOG CONTEXT:\t" . implode(', ', $context) . "\n" .
            "LOG TIME:\t" . date('Y-m-d h:m:s') . "\n\n";
        fopen($path, "a+");
        if (file_exists($path)) {
            file_put_contents($path, $msg, FILE_APPEND);
        }
    }
}