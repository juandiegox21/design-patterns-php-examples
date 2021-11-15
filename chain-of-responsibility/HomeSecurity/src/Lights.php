<?php

namespace Acme\HomeSecurity;

use Exception;

class Lights extends AbstractHomeChecker
{
    public function check(HomeStatus $home)
    {
        if (!$home->lightsOff) {
            throw new Exception('The lights are still on!!');
        }

        $this->next($home);
    }
}
