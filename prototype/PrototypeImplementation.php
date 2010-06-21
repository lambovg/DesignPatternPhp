<?php
/**
 * PrototypeImplementation 
 */
class PrototypeImplementation 
extends PrototypeFactory
{
  private
    $x = 0;
  
  /**
   * 
   * @access public
   * @return void
   */
  public function __construct($x)
  {
  	$this->x = $x;
  }   
  
  /**
   * 
   * @access public
   * @return void
   */
  public function prototypeFactory($x)
  {
  	$this->x = $x;
  }
    
  /**
   * 
   * @access public
   * @return void
   */
  public function printValue()
  {
  	echo 'Value: ' . $x;
  }
}
?>