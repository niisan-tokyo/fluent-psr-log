<?php

require 'vendor/autoload.php';

$logger = new NiisanTokyo\FluentPsrLogger\Logger('localhost');

$logger->notice('テスト');
