<?php
$codes = ["UK" => "+44", "NO" => "+47", "SG" => "+65"];

foreach ($codes as $code => $value)
{
  echo "Dialling code for $code is $value <br>";
}
?>