<?php

declare(strict_types=1);

define('START_TIME', microtime(true));

require __DIR__ . '/../App/bootstrap.php';

// Request handler
// Start local with php -S 127.0.0.1:8123
echo('I\'m famous now');
