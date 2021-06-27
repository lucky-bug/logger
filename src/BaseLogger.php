<?php

namespace LuckyBug\Logger;

class BaseLogger implements LoggerInterface
{
    public function log(...$args): void
    {
        foreach ($args as $arg) {
            var_dump($arg);
        }
    }
}
