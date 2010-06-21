<?php
/**
 * Line
 */
class Line implements iShape
{
  private $legacyRectangle = null;
  
  /**
   * 
   * @access public
   * @return void
   */
  public function __construct()
  {
    $this->legacyRectangle = new LegacyLine();
  }
  
  /**
   * 
   * @access public
   * @return void
   */
  public function draw($x1, $y1, $x2, $y2)
  {
    $this->legacyRectangle->draw($x1, $y1, $x2, $y2);
  }
}