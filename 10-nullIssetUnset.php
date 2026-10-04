<?php
$name = "Azka";
var_dump(is_null($name)); 

$name2 = null;
var_dump(is_null($name2));

echo "================================\n";
unset($name2);
var_dump(isset($name2));