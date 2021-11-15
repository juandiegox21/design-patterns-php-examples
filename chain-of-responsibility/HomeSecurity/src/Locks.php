<?php

namespace Acme\HomeSecurity;

use Exception;

class Locks extends AbstractHomeChecker
{
    public function check(HomeStatus $home)
    {
        if (!$home->locked) {
            throw new Exception('The doors are not locked!!');
        }

        $this->next($home);
    }
}
