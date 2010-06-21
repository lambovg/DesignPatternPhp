<?php
/**
 * Abstraction
 */
interface iShape
{
  /**
   * Low level
   *
   */
  public function draw();
  
  /**
   * High level
   *
   * @param double $pct
   */
  public function resizeByPercentage($pct);
}
?>