<html>

<head>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="ressources_front/style/github-markdown.css">
    <style>
        .markdown-body {
            box-sizing: border-box;
            min-width: 200px;
            max-width: 980px;
            margin: 0 auto;
            padding: 45px;
        }
        
        @media (max-width: 767px) {
            .markdown-body {
                padding: 15px;
            }
        }
        </style>
        <link rel="stylesheet" href="ressources_front/style/master.css">
    <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-118325156-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-118325156-1');
</script>

</head>

<body>


    <?php 
require "vendor/autoload.php";
$text = file_get_contents('ressources_back/markdown/home.md');  

$Extra = new ParsedownExtra();
echo('<article class="markdown-body"><div class="content">');
echo $Extra->text($text);
echo('</div></article>')
?>

</body>

</html>
