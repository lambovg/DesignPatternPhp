<?php
function __autoload($className)
{
  require_once $className .'.php';
}

$pressSwitch = new PressSwitch(array(
  0 => 'ON'
));

echo '<pre>';
var_dump($pressSwitch);
echo '</pre>';
?>