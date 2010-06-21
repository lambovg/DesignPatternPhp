<?php
function __autoload($className)
{
  require_once $className .'.php';
}

$bridge = BridgePattern::execute();

echo '<pre>';
print_r($bridge);
echo '</pre>';
?>