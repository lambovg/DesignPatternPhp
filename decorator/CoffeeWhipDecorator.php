<?php
/**
 * Concrete decorator
 *
 */
class CoffeeWhipDecorator extends MenuDecorator
{
  public function cost()
  {
    $this->component->cost() + 0.7;
  }
}
?>