<?php 
declare(strict_types=1);

function generateHhyperlink(string $href, string $text) : string
{
  return "<a href='$href'>$text</a>";
}

// Usage (i.e. client code)
$hyperlink = generateHhyperlink("http://www.bbc.co.uk", "BBC");
echo "Hyperlink is $hyperlink";
?>