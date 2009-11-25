<?php
/**
 * Concrete decorator
 *
 */
class CoffeeMilkDecorator extends MenuDecorator
{
  public function cost()
  {
    $this->component->cost() + 0.5;
  }
}
?>