<?php
/**
 * PrototypeFactory
 */
abstract class PrototypeFactory 
{
	/**
	 * 
	 * @access public
	 * @return void
	 */
	public function __clone()
	{
	  $this = clone $this;

	  return $this;
	}
	
	/**
	 * @access public
	 * @return void
	 */
	abstract public function prototypeFactory(int $x);
	
	/**
	 * @access public
	 * @return void
	 */
	public function printValue();
}
?>