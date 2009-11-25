<?php
class UserList implements iObserverAble 
{
  private $observers = array();
  
  public function __construct()
  {
    
  }
  
  public function addCustomer($name)
  {
    $events = array();
    foreach($this->observers as $obs)
    {
      /*@var $obs iObserver*/
      $events[] = $obs->onChanged($this, $name);
    }
    
    return $events;
  }
  
  public function addObserver($observer)
  {
    $this->observers[] = $observer;
  }
}
?>