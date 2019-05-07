<?php
$players = ["Nordfelt", 
            "Roberts", "van der Horn", "Rodon", "Naughton",
            "Dyer", "Byers", "Celina", "Grimes", "James",
            "McBurnie"];

$goalie   = array_slice($players, 0, 1);
$outfield = array_slice($players, 1);
$defence  = array_slice($players, 1, 4);
$midfield = array_slice($players, 5, 5);
$upFront  = array_slice($players, 10, 1);

echo "Goalie:   " . join(",", $goalie)   . "<br>";
echo "Outfield: " . join(",", $outfield) . "<br>";
echo "Defence:  " . join(",", $defence)  . "<br>";
echo "Midfield: " . join(",", $midfield) . "<br>";
echo "Up front: " . join(",", $upFront)  . "<br>";
?>