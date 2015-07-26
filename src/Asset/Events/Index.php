<?php

namespace Asset\Events;

use FastD\Framework\Events\BaseEvent;

class Index extends BaseEvent
{
    public function indexAction()
    {
        return 'hello world';
    }
}