<?php
function __autoload($className)
{
  require_once $className .'.php';
}

echo '<pre>';
$strategyExample = new StrategyExample;
echo '</pre>';
?>
