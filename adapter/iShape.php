<?php
interface iShape
{
  /**
   * 
   * @param int $x1
   * @param int $y1
   * @param int $x2
   * @param int $y2
   * @return int
   */
  public function draw($x1, $y1, $x2, $y2);
}