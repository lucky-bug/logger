<?php

namespace LuckyBug\Logger;

interface LoggerInterface
{
    public function log(...$args): void;
}
