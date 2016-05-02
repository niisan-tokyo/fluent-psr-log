This is a fluent logger implemented PSR-3 logger interface.

# Usage

This package is managed by composer. You can install this by following command.

```
composer require niisan-tokyo/fluent-psr-logger
```

For example, you can use this logger:

```
$logger = new NiisanTokyo\FluentPsrLogger\Logger();
$logger->info('', ['fruit' => 'apple', 'pet' => 'dog']);
$logger->debug('this is debug log');
```
And then you can get the output log:

```
2016-05-02T13:54:43+00:00	info	{"fruit":"apple","pet":"dog"}
2016-05-02T13:54:43+00:00	debug	{"message":"this is debug log"}
```
The tag of fluent log is represented as the log level.
