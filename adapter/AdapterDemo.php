<?php
/**
 * AdapterDemo
 */
class AdapterDemo
{
  /**
   * 
   * @access public
   * @return void
   */
  static public function main($args)
  {
  	$shapes = array(
  	  new Line(), new Rectangle()
  	);
  	
  	$x1 = 10;
  	$y1 = 20;
  	
  	$x2 = 30;
  	$y2 = 60;
  	
  	foreach($shapes as $shape)
  	{
			/*@var $shape Line()*/
  	  $shape->draw($x1, $y1, $x2, $y2); 
  	}
  }	
}
?>