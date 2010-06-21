<?php
class UserListAccess implements iObserver  
{
  public function onChanged($sender, $args)
  {
    return $args . ' user list access';
  }
}
?>