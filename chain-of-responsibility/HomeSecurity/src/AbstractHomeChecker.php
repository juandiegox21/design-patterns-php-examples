<?php

namespace Acme\HomeSecurity;

abstract class AbstractHomeChecker
{
    public $succesor;

    public abstract function check(HomeStatus $home);

    public function succeedWith($succesor)
    {
        $this->succesor = $succesor;
    }

    public function next(HomeStatus $home)
    {
        if ($this->succesor) {
            $this->succesor->check($home);
        }
    }
}
