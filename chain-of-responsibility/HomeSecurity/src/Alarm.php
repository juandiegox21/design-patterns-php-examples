<?php

namespace Acme\HomeSecurity;

use Exception;

class Alarm extends AbstractHomeChecker
{
    public function check(HomeStatus $home)
    {
        if (!$home->alarmOn) {
            throw new Exception('The alarm has not been set!!');
        }

        $this->next($home);
    }
}
