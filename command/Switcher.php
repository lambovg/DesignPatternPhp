<?php
/**
 * The Invoker class
 *
 */
class Switcher
{
    /**
     * @var FlipUpCommand
     */
    private $flipUpCommand = null;

    /**
     * @var FlipDownCommand
     */
    private $flipDownCommand = null;

    public function __construct(iCommand $flipUpCmd, iCommand $flipDownCmd)
    {
        $this->flipUpCommand = $flipUpCmd;
        $this->flipDownCommand = $flipDownCmd;
    }

    public function flipUp()
    {
        $this->flipUpCommand->execute();
    }

    public function flipDown()
    {
        $this->flipDownCommand->execute();
    }
}

