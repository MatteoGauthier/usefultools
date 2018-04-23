<?php 
require "vendor/autoload.php"
$text = file_get_contents('res\markdown\home.md');  

$Extra = new ParsedownExtra();

echo $Extra->text($text); 
?> 