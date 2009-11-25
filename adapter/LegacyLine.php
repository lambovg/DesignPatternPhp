<?php
class LegacyLine 
{
  /**
   * @param int $x1
   * @param int $y1
   * @param int $x2
   * @param int $y2
   */
  public function draw($x1, $y1, $x2, $y2)
  {
    return 'line from ('. $x1 .', '. $y1 .') to ('.$x2 .', '. $y2 .' )';
  }
}
?>