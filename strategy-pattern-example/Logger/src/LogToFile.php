<?php

namespace Acme\Logger;

class LogToFile implements LoggerInterface
{
    public function log($data)
    {
        var_dump('Log to file');
    }
}
