<?php
class Singleton
{
  private static $_instance;

  protected function __construct()
  {

  }

  public function __clone()
  {
    trigger_error('Clone is not allowed.', E_USER_ERROR);
  }

  public function __wakeup()
  {
    trigger_error('Deserializing is not allowed.', E_USER_ERROR);
  }

  public static function getInstance()
  {
    if(!self::$_instance instanceof self)
      self::$_instance = new self;

    return self::$_instance;
  }

  public function doActions()
  {
    return 'do action';
  }
}
?>