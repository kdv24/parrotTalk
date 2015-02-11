<?php 
    $string1 = $_GET["string1"];
    $string2 = $_GET["string2"];
    $string3 = $_GET["string3"];
    $string4 = $_GET["string4"];
    $string1Fun = strtoupper($string1);
    $string2Fun = str_word_count($string2);
    $string3Fun =str_shuffle($string3);
    $string4Fun =1 + (stripos($string4, cat));

?>
<html>
<head>
    <title>String Games</title>
</head>
<script>document.write('<script src="http://' + (location.host || 'localhost').split(':')[0] + ':35729/livereload.js?snipver=1"></' + 'script>')</script>
<body>
    <h1>Ta da!</h1><br>
    <h3>Here you go...</h3>
    <h4>1. Your first words are now in all caps.</h4>  <p><?php echo $string1 . " becomes- " . $string1Fun; ?></p><br>
    <h4>2. This is how many words you typed for item two.</h4>  <p>So, <?php echo $string2 . " becomes- " . $string2Fun; ?></p><br>
    <h4>3.  Number three shuffles all your letters around into a word scramble.</h4> <p> <?php echo $string3 . " becomes- " . $string3Fun; ?></p><br>
    <h4>4. And, number four tells you the position of the word CAT in your sentence.</h4> <p><?php echo $string4 . " becomes- " . $string4Fun; ?></p><br>
</body>
</html>