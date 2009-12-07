<?php
/**
 * ProxyExample
 */
class ProxyExample
{
	/**
	 *
	 * @access public
	 * @return void
	 */
	static public function main($args)
	{
		$image1 = new ProxyImage('image_photo_1');
		$image2 = new ProxyImage('image_photo_2');
		
		$image1->displayImage();
		$image2-> displayImage();
	}
}