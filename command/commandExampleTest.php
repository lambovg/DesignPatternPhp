<?php
function __autoload($className)
{
  require_once $className .'.php';
}

$pressSwitch = new PressSwitch(array(
  0 => 'OFF'
));

echo '<pre>';
var_dump($pressSwitch);
echo '</pre>';

$pressSwitch = new PressSwitch(array(
  0 => 'On'
));

echo '<pre>';
var_dump($pressSwitch);
echo '</pre>';

