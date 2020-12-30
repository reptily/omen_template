<?php

use Omen\Event\Event;

Event::onConnect(\App\Events\HelloWorldEvent::class, 'Hello');
