<?php
class AdapterDemo
{
  static public function main($args)
  {
    $shapes = array(
      new LegacyLine(), new LegacyRectangle()
    );
    
    $x1 = 10;
    $y1 = 20;
    
    $x2 = 30;
    $y2 = 60;
  }
}
?>