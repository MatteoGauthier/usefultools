<html>
    <?php include('ressources_back\include_head.php') ?>

<body>
    <?php 
require "vendor/autoload.php";
$UFT_home = file_get_contents('ressources_back/markdown/UFT_home.md');  

$Extra = new ParsedownExtra();
echo('<article class="markdown-body"><div id="content">');
echo $Extra->text($UFT_home);
echo('</div></article>')
?>
<?php include('ressources_back\include_js.php') ?>
<script src="https://unpkg.com/embed-js@5.0.3/umd/embed.js"></script>
</body>

</html>