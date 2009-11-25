<?php
/**
 * ConcreteImplementator 1/2
 */
class DrawingAPI1 implements iDrawingApi 
{
  public function drawCircle($x, $y, $radius)
  {
    return sprintf('API1.circle at %s:%s radius %s',
      $x, $y, $radius          
    );
  }
}
?>