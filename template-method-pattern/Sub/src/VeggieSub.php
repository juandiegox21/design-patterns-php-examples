<?php

namespace Acme\Sub;

class VeggieSub extends AbstractSub
{
    public function addPrimaryToppings()
    {
        var_dump('adding veggies');
        return $this;
    }
}
