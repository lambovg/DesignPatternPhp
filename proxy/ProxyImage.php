<?php
/**
 * ProxyImage
 */
class ProxyImage
implements Image
{
  private 
    $filename = null,
    $image = null;
  
	/**
	 *
	 * @access public
	 * @return void
	 */
	public function __construct($filename)
	{
		$this->filename = $filename;
	}
	
	/**
	 * 
	 * @access public
	 * @return void
	 */
	public function displayImage()
	{
		$this->image = new RealImage($this->filename);
		$this->image->displayImage();
	}
}