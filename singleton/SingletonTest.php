<?php
function __autoload($className)
{
  require_once $className .'.php';
}

echo Singleton::doActions();
?>