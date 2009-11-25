<?php
class ConcreteStrategyC implements IStrategy
{
  public function execute()
  {
     echo 'Called '. __CLASS__ .' execute method' ."\n";
  }
}
?>