<?php
/* ConcreateBuilder */
class SpicyPizzaBuilder extends PizzaBuilder
{
    /**
     * @return Void
     */
    public function buildDough()
    {
        $this->pizza->setDought('pan baked');
    }

    /**
     * @return Void
     */
    public function buildSauce()
    {
        $this->pizza->setSauce('hot');
    }

    /**
     * @return Void
     */
    public function buildTopping()
    {
        $this->pizza->setTopping('piperoni+salami');
    }
}

