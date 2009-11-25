<?php
class Context
{
  public $strategy;

  public function __construct(IStrategy $strategy)
  {
    $this->strategy = $strategy;
  }

  public function execute()
  {
    $this->strategy->execute();
  }
}
?>