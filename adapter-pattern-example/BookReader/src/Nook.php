<?php

namespace Acme\BookReader;

class Nook implements eReaderInterface
{
    public function turnOn()
    {
        var_dump('Turn the Nook on');
    }

    public function pressNextButton()
    {
        var_dump('Press the next button on the Nook');
    }
}
