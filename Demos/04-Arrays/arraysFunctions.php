<?php
function funcByVal(array $arr) 
{
  $arr[0] *= 2;
}

function funcByRef(array &$arr)
{
  $arr[0] *= 2;
}

$lotto = [3, 12, 19, 1, 2, 7];

funcByVal($lotto);
echo $lotto[0] . "<br>";    // 3

funcByRef($lotto);
echo $lotto[0] . "<br>";    // 6
?>