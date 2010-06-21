<?php
class Switcher
{
  /**
   * Enter description here...
   *
   * @var unknown_type
   */
  private $flipUpCommand = null;

  /**
   * Enter description here...
   *
   * @var unknown_type
   */
  private $flipDownCommand = null;

  public function __construct($flipUpCommand, $flipDownCommand)
  {
    $this->flipUpCommand = $flipUpCommand;
    $this->flipDownCommand = $flipDownCommand;
  }

  /**
   * Enter description here...
   *
   */
  public function flipUp()
  {
    $this->flipUpCommand->execute();
  }

  /**
   * Enter description here...
   *
   */
  public function flipDown()
  {
    $this->flipDownCommand->execute();
  }
}
?>