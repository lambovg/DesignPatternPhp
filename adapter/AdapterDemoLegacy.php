<?php
class AdapterDemo
{
  /**
   * 
   * @param unknown_type $args
   * @return unknown_type
   */
  static public function main($args)
  {
    $shapes = array(
      new LegacyLine(), new LegacyRectangle()
    );
    
    $x1 = 10;
    $y1 = 20;
    
    $x2 = 30;
    $y2 = 60;
    
    foreach($shapes as $shape)
    {
   		if(get_class($shape) == 'LegacyLine')
   		{
   			/*@var $shape LegacyLine()*/
   			$shape->draw($x1, $y1, $x2, $y2);
   		}
      elseif(get_class($shape) == 'LegacyRectangle')
      {
        /*@var $shape LegacyRectangle()*/
        $shape->draw(min($x1, $x2), min($y1, $y2), 
          abs($x2 - $x1), abs($y2 - $y1));
      }
    }
  }
}
?>