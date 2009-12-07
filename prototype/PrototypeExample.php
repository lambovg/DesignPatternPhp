<?php
/**
 * PrototypeExample
 */
class PrototypeExample
{
  private 
    $prototypeFactory = null;
  
	/**
	 *
	 * @access public
	 * @return void
	 */
	public function __construct(PrototypeFactory $prototypeFactory)
	{
		$this->prototypeFactory = $prototypeFactory;
	}
	
	/**
	 * 
	 * @access public
	 * @return void
	 */
	public function makeCopy()
	{
		// clone Prototype factory class
	}
	
	/**
	 * 
	 * @access public
	 * @return void
	 */
	static public function main($args)
	{
		
	}
}
