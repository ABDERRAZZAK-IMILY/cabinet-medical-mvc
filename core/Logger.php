<?php

namespace Core;

class Logger {
    private static $logFile = __DIR__ . '/../logs/app.log';

    public static function log($level, $message, $context = []) {
        $timestamp = date('Y-m-d H:i:s');
        $contextString = !empty($context) ? json_encode($context) : '';
        $logMessage = "[$timestamp] [$level] $message $contextString" . PHP_EOL;

        if (!file_exists(dirname(self::$logFile))) {
            mkdir(dirname(self::$logFile), 0777, true);
        }

        file_put_contents(self::$logFile, $logMessage, FILE_APPEND);
    }

    public static function info($message, $context = []) {
        self::log('INFO', $message, $context);
    }

    public static function warning($message, $context = []) {
        self::log('WARNING', $message, $context);
    }

    public static function error($message, $context = []) {
        self::log('ERROR', $message, $context);
    }
}
