<?php

declare(strict_types=1);

require_once 'vendor/autoload.php';

use App\Service\Logger;

$loggerService = new Logger('logs.txt');

$loggerService->info("loger started");
