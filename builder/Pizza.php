<?php
/* Product */
class Pizza
{
    private $dought = null;
    private $sauce = null;
    private $topping = null;

    public function setDought($dought)
    {
        $this->dought = $dought;
    }

    public function setSauce($sauce)
    {
        $this->sauce = $sauce;
    }

    public function setTopping($topping)
    {
        $this->topping = $topping;
    }
}

