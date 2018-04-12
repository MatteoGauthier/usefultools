
<html lang="fr">

<head>
  <meta charset="utf-8">
  <title></title>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,300italic,700,700italic">
  <style>
  * {
    font: Roboto;
  }</style>
</head>

<body>
<?php
require_once 'libs/Parsedown.php';
$text = file_get_contents('home.md');
$Parsedown = new Parsedown();
echo $Parsedown->text($text); ?>
</body>

</html>
