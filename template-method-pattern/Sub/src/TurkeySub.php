<?php

namespace Acme\Sub;

class TurkeySub extends AbstractSub
{
    public function addPrimaryToppings()
    {
        var_dump('adding turkey');
        return $this;
    }
}
