<?php
error_reporting(E_ALL);

function __autoload($className)
{
  require_once $className .'.php';
}

$cook = new Cook();
$hawaiianPizzaBuilder = new HawaiianPizzaBuilder();
$spicyPizzabuilder = new SpicyPizzaBuilder();

$cook->setPizzaBuilder($hawaiianPizzaBuilder);
$cook->constructPizza();

$hawaiian = $cook->getPizza();
var_dump($hawaiian);
echo '<br /><br />';

$cook->setPizzaBuilder($spicyPizzabuilder);
$cook->constructPizza();

$spicy = $cook->getPizza();
var_dump($spicy);

