<?php
$euCodes = array();
$euCodes["UK"] = "+44";
$euCodes["NO"] = "+47";
$euCodes["DK"] = "+45";
echo "There are " . count($euCodes) . " EU dialling codes<br>";

$asiaCodes = array("SG" => "+65", "IN" => "+91", "JP" => "+81");
echo "There are " . count($asiaCodes) . " Asia dialling codes<br>";

$amCodes = ["USA" => "+1", "MX" => "+52", "BR" => "+55"];
echo "There are " . count($amCodes) . " Americas dialling codes<br>";
?>