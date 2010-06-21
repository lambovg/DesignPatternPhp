<?php
class PressSwitch
{
  public function __construct($args = array())
  {
    $lamp = new Light();
    $switchUp = new FlipUpCommand($lamp);
    $switchDown = new FlipDownCommand($lamp);

    $switcher = new Switcher($switchUp, $switchDown);

    switch($args[0])
    {
      case 'ON':
        $switcher->flipUp();
        break;

      case 'OFF':
        $switcher->flipDown();
        break;

      default:
        throw new Exception('Arguments ON / OFF are required');
        break;
    }
  }
}
?>