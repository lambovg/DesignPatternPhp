<?php
/* Product */
abstract class PizzaBuilder
{
    protected $pizza = null;

    public function getPizza()
    {
        return $this->pizza;
    }

    public function createNewPizzaProduct()
    {
        $this->pizza = new Pizza();
    }

    abstract public function buildDough();
    abstract public function buildSauce();
    abstract public function buildTopping();
}

