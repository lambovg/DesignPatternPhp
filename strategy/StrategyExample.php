<?php
class StrategyExample
{
  public function __construct()
  {
    $context = new Context(new ConcreteStrategyA());
    $context->execute();

    $context = new Context(new ConcreteStrategyB());
    $context->execute();

    $context = new Context(new ConcreteStrategyC());
    $context->execute();
  }
}
?>