<?php

declare(strict_types=1);

namespace App\Service;

use Psr\Log\LoggerInterface;
use RuntimeException;

class Logger implements LoggerInterface
{   
    public function __construct(
        public string $logFile,
    )
    {}

    public function log($level, string|\Stringable $message, array $context = []): void
    {
        $formattedMessage = $this->interpolate($message, $context);
        $logEntry = strtoupper($level) . ':' . $formattedMessage . PHP_EOL;
        file_put_contents($this->logFile, $logEntry, FILE_APPEND);
        echo $logEntry;
    }

    public function info(string|\Stringable $message, array $context = []): void
    {
        $this->log('info', $message, $context);
    }

    public function warning(string|\Stringable $message, array $context = []): void
    {
        $this->log('warning', $message, $context);
    }

    public function error(string|\Stringable $message, array $context = []): void
    {
        $this->log('error', $message, $context);
    }

    public function debug(string|\Stringable $message, array $context = []): void
    {
        $this->log('debug', $message, $context);
    }

    public function emergency(string|\Stringable $message, array $context = []): void
    {
        throw new RuntimeException("Forbidden method");
    }

    public function alert(string|\Stringable $message, array $context = []): void
    {
        throw new RuntimeException("Forbidden method");
    }

    public function critical(string|\Stringable $message, array $context = []): void
    {
        throw new RuntimeException("Forbidden method");
    }

    public function notice(string|\Stringable $message, array $context = []): void
    {
        throw new RuntimeException("Forbidden method");
    }

    private function interpolate(string|\Stringable $message, array $context = array())
    {
        $replace = array();

        foreach ($context as $key => $val) {
            if (!is_array($val) && (!is_object($val) || method_exists($val, '__toString'))) {
                $replace['{' . $key . '}'] = $val;
            }
        }

        return strtr($message, $replace);
    }
}