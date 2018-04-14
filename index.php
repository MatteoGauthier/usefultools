<html lang="fr">

<head>
  <meta charset="utf-8">
  <title></title>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,300italic,700,700italic">
  <style>
    * {
      font: Roboto;
    }
    #md {
      font-family: Roboto, 'Roboto', Serif; 
    }
  </style>
</head>

<body>

    <?php
      require_once 'libs/Parsedown.php';
      require_once 'libs/ParsedownExtra.php';
      // require_once 'libs\ParsedownExtra.php';
      $text = file_get_contents('home.md');  
      $ParsedownExtra = new ParsedowExtra();
      echo `<div id="md">`;
      echo $ParsedownExtra->text($text);
      echo `</div>`
      ?>


</body>
</html>