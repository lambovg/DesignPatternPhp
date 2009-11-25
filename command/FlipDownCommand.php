<?php
class FlipDownCommand implements iCommand
{
  /**
   * Enter description here...
   *
   * @var unknown_type
   */
  private $light;

  public function __construct(Light $light)
  {
    $this->light = $light;
  }

  /**
   *
   *
   */
  public function execute()
  {
    $this->light->turnOff();
  }
}
?>