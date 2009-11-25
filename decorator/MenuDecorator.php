<?php
/**
 * Decorator
 *
 */
abstract class MenuDecorator
{
  protected $component;

  public function __construct(MenuItem $component)
  {
    $this->component = $component;
  }

  abstract public function cost();
}
?>