<?php
class BridgePattern
{
  static public function execute($args = array())
  {
    $shapes = array();
    $shapes[0] = new CircleShape(1, 2, 3, new DrawingAPI1());
    $shapes[1] = new CircleShape(5, 7, 11, new DrawingAPI2());

    $drawings = array();
    foreach ($shapes as $shape)
    {
      /* @var $shape Shape */
      $shape->resizeByPercentage(2.5);

      $drawings[] = $shape->draw();
    }

    return $drawings;
  }
}
?>