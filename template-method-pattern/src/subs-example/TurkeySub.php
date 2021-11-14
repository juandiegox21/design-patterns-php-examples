<?php

namespace Acme;

class TurkeySub extends AbstractSub
{
    public function addPrimaryToppings()
    {
        var_dump('adding turkey');
        return $this;
    }
}
