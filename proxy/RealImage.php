<?php
/**
 * RealImage
 */
class RealImage
implements Image
{
  private $filename = null;
  
	/**
	 *
	 * @access public
	 * @return void
	 */
	public function realImage($filename)
	{
		$this->filename = $filename;
    
		
	}
	
	/**
	 * 
	 * @access public
	 * @return void
	 */
	public function loadImageFromDisk()
	{
	  echo 'Loading ' . $this->filename;
	}
	
	/**
	 * 
	 * @access public
	 * @return void
	 */
	public function displayImage()
	{
		echo 'Displaying' . $this->filename;
	}
}