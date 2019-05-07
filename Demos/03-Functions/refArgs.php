<?php 
function myfunc($arg1, &$arg2)
{
  $arg1++;
  $arg2++;
}

$a = 100;
$b = 100;
myfunc($a, $b);

echo "$a $b";    // 100 101
?>