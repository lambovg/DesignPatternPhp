<?php
class ConcreteStrategyA implements IStrategy
{
  public function execute()
  {
     echo 'Called '. __CLASS__ .' execute method' ."\n";
  }
}
?>