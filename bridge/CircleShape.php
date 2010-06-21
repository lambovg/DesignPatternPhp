<?php
/**
 * Refined Abstraction
 *
 */
class CircleShape implements iShape
{
  private $x = 0;
  private $y = 0;
  private $radius = 0;

  /**
   * @var DrawingApi
   */
  private $drawingAPI = null;

  public function __construct($x, $y, $radius, iDrawingApi $drawingAPI)
  {
    $this->x = $x;
    $this->y = $y;
    $this->radius = $radius;
    $this->drawingAPI = $drawingAPI;
  }

  /**
   * @access public
   * @return void
   */
  public function draw()
  {
    return $this->drawingAPI->drawCircle($this->x, $this->y, $this->radius);
  }

  /**
   * @access public
   * @return void
   * @param double $pct
   */
  public function resizeByPercentage($pct)
  {
    $this->radius *= $pct;
  }
}
?>