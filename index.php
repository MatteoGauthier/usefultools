<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="utf-8">
  <title></title>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,300italic,700,700italic">
</head>

<body>
<?php $Parsedown = new Parsedown(); ?>
<?= echo $Parsedown->text('# SALUT'); ?>
</body>

</html>
