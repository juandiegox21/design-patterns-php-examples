<?php

namespace Acme\Logger;

class App
{
    public function log($data, LoggerInterface $logger = null)
    {
        $logger = $logger ?: new LogToFile();

        $logger->log($data);
    }
}
