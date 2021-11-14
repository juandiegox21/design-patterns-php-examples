<?php

namespace Acme\BookReader;

interface BookInterface
{
    public function open();
    public function turnPage();
}
