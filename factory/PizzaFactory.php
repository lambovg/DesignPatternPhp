<?php
class PizzaFactory
{
  public static function createPizza($type)
  {
    switch($type)
    {
      case 'Ham and Mushroom':
        return new HamAndMushroomPizza();
      break;
      case 'Hawaiian':
        return new HawaiianPizza();
      break;
      default:
        return new DeluxePizza();
    }
  }
}
?>