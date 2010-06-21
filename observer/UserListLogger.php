<?php
class UserListLogger implements iObserver 
{
  public function onChanged($sender, $args)
  {
    return  $args . ' user list logger';
  }
}
?>
