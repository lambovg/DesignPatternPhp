<?php
class FlipUpCommand implements iCommand
{
  /**
   * Enter description here...
   *
   * @var unknown_type
   */
  private $light;

  /**
   * Enter description here...
   *
   */
  public function __construct(Light $light)
  {
    $this->light = $light;
  }

  /**
   * Enter description here...
   *
   */
  public function execute()
  {
    $this->light->turnOn();
  }
}
?>