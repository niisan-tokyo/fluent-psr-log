<?php

require 'vendor/autoload.php';

$logger = new NiisanTokyo\FluentPsrLogger\Logger('localhost');

$logger->info('', ['fluit' => 'apple', 'pet' => 'dog']);
$logger->debug('this is debug log');
