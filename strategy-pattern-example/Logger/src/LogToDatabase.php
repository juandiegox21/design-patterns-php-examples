<?php

namespace Acme\Logger;

class LogToDatabase implements LoggerInterface
{
    public function log($data)
    {
        var_dump('Log to database');
    }
}
