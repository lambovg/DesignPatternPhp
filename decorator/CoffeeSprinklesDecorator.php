<?php
/**
 * Concrete decorator
 *
 */
class CoffeeSprinklesDecorator extends MenuDecorator
{
  public function cost()
  {
    $this->component->cost() + 0.2;
  }
}
?>