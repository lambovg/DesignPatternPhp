<?php
/* ConcreateBuilder */
class HawaiianPizzaBuilder extends PizzaBuilder
{
    /**
     * @return Void
     */
    public function buildDough()
    {
        $this->pizza->setDought('cross');
    }

    /**
     * @return Void
     */
    public function buildSauce()
    {
        $this->pizza->setSauce('mild');
    }

    /**
     * @return Void
     */
    public function buildTopping()
    {
        $this->pizza->setTopping('ham+pineapple');
    }
}

