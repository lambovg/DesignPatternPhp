<?php
function __autoload($className)
{
  require_once $className .'.php';
}

$pizza = PizzaFactory::createPizza('Hawaiian');
echo $pizza->getPrice();

?>