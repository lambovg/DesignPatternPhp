<?php
/**
 * ConcreteImpementator 2
 */
class DrawingAPI2 implements iDrawingApi 
{
  public function drawCircle($x, $y, $radius)
  {
    return sprintf('API2.circle at %s:%s radius %s',
      $x, $y, $radius
    );
  }
}
?>