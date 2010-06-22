<?php
/**
 * The Command for turning on the light
 */
class FlipUpCommand implements iCommand
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
        $this->theLight->turnOn();
    }
}

