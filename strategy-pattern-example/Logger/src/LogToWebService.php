<?php

namespace Acme\Logger;

class LogToWebService implements LoggerInterface
{
    public function log($data)
    {
        var_dump('Log to web service');
    }
}
