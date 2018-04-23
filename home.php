<html>

<head>

    <link rel="stylesheet" href="style/master.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style/github-markdown.css">
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
</head>

<body>


    <?php 
require "vendor/autoload.php";
$text = file_get_contents('res\markdown\home.md');  

$Extra = new ParsedownExtra();
echo('<article class="markdown-body"><div class="content">');
echo $Extra->text($text);
echo('</div></article>')
?>

</body>

</html>