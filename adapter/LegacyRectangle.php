<?php
class LegacyRectangle
{
  
  public function draw($x, $y, $w, $h)
  {
    return 'Rectangle at ('. $x .','. $y .') with width '. $w 
      .'and height '. $h; 
  }
}
?>