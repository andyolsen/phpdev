<?php
$txt1 = "Hello";
$txt2 = "world";
$txt3 = $txt1 . " " . $txt2 . "!!!";
echo $txt3 . "<br>";

$output = "<h1>";
$output .= "This is message ";
$output .= "to the user";
$output .= "</h1>";
echo $output . "<br>";

$swansGoals = 0;
$swansGoals++;
$swansGoals++;
$swansGoals++;
$output = "<p>Swansea scored " . $swansGoals . " against Cardiff</p>";
echo $output . "<br>";

?>