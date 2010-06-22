<?php
/**
 * The Command for turning off the light
 */
class FlipDownCommand implements iCommand
{
    /**
     * @var Light
     */
    private $theLight = null;

    public function __construct(Light $light)
    {
        $this->theLight = $light;
    }

    public function execute()
    {
        $this->theLight->turnOff();
    }
}

