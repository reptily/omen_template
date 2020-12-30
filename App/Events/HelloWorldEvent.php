<?php

namespace App\Events;

use Omen\Facade\Event;

class HelloWorldEvent extends Event
{
    /**
     * @return \Omen\Event\DTO
     */
    public function Hello()
    {
        return $this->create('connect', ['Hello World! I`m Omen!']);
    }
}
