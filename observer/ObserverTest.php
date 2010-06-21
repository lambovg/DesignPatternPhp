<?php
function __autoload($className)
{
  require_once $className .'.php';
}

$ul = new UserList();
$ul->addObserver(new UserListLogger());
$ul->addObserver(new UserListAccess());
$ul->addObserver(new UserListAccess());

echo '<pre>';
print_r($ul->addCustomer('Jack'));
print_r($ul->addCustomer('Jack2'));
echo '</pre>';
?>