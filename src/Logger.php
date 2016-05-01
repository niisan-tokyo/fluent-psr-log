<?php

namespace NiisanTokyo\FluentPsrLogger;

use Psr\Log\LoggerInterface;
use Psr\Log\LoggerTrait;
use Fluent\Logger\FluentLogger;
use Psr\Log\LogLevel;

/**
 * FluentLogger implemented PSR-3
 *
 * Perhaps this way is ugly...
 * The fluent log data by json format, so in this way,
 * the message is regarded as a part of context.
 *
 */
class Logger implements LoggerInterface
{
    use LoggerTrait;

    private $logger;

    public function __construct($host = FluentLogger::DEFAULT_ADDRESS,
                                $port = FluentLogger::DEFAULT_LISTEN_PORT,
                                array $options = array())
    {
        $this->logger = new FluentLogger($host, $port, $options);

    }

    /**
     * logging method
     *
     * @param string $level   log level
     * @param string $message the message
     * @param array  $context logging context
     *
     * @return void
     */
    public function log($level, $message, array $context = [])
    {
        if ($level !== LogLevel::INFO) {
            $context['message'] = $message;
        }

        $this->logger->post($level, $context);

    }
}
