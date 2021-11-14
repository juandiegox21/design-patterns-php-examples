<?php

namespace Acme\Sub;

abstract class AbstractSub
{
    public function make()
    {
        return $this
            ->layBread()
            ->addLetuce()
            ->addSauces()
            ->addPrimaryToppings();
    }

    protected function layBread()
    {
        var_dump('laying down the bread');
        return $this;
    }

    protected function addLetuce()
    {
        var_dump('adding lettuce');
        return $this;
    }

    protected function addSauces()
    {
        var_dump('add oil and vinegar');
        return $this;
    }

    public abstract function addPrimaryToppings();
}
