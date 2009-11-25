<?php
/**
 * Rectangle
 */
class Rectangle implements iShape
{
  private
    $legacyRectangle = null;
  
	/**
	 *
	 * @access public
	 * @return void
	 */
	public function __construct()
	{
	  if(is_null($this->legacyRectangle))
	    $this->legacyRectangle = new LegacyRectangle();
	}
	
	/**
	 * 
	 * @access public
	 * @return void
	 */
	public function draw($x1, $x2, $y1, $y2)
	{
		$this->legacyRectangle->draw(min($x1, $x2), min($y1, $y2), abs($x2 - $y1),
		  abs($y2- $y1));
	}
} 
?>