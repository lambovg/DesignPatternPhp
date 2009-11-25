<?php
function __autoload($className)
{

  echo $className . '<br />';
  require_once $className .'.php';
}

echo '<pre>';
$strategyExample = new StrategyExample;
echo '</pre>';
?>