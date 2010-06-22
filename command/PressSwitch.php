<?php
/**
 * The Client (invoker)
 *
 */
class PressSwitch
{
    public function __construct($args = array())
    {
        $lamp = new Light();

        $switchUp = new FlipUpCommand($lamp);
        $swithDown = new FlipDownCommand($lamp);

        $s = new Switcher($switchUp, $swithDown);

        try
        {
            if(strcmp(strtolower($args[0]), 'on') == 0)
                $s->flipUp();
            elseif(strcmp(strtolower($args[0]), 'off') == 0)
                $s->flipDown();
            else
                throw new Exception('Argument ON or OFF is required');
        }
        catch(Exception $e)
        {
            throw $e;
        }
    }
}

