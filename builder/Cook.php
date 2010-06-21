<?php
/* Director */
class Cook
{
    /**
     * @var PizzaBuilder
     */
    private $pizzaBuilder = null;

    public function setPizzaBuilder($pb)
    {
        $this->pizzaBuilder = $pb;
    }

    public function getPizza()
    {
        return $this->pizzaBuilder->getPizza();
    }

    public function constructPizza()
    {
        $this->pizzaBuilder->createNewPizzaProduct();
        $this->pizzaBuilder->buildDough();
        $this->pizzaBuilder->buildSauce();
        $this->pizzaBuilder->buildTopping();
    }
}

