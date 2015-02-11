<?php 
    $string1 = $_GET["string1"];
    $string2 = $_GET["string2"];
    $string3 = $_GET["string3"];
    $string4 = $_GET["string4"];
    $string1Fun = strtoupper($string1);
    $string2Fun = str_word_count($string2);
    $string3Fun =str_shuffle($string3);
    $string4Fun =stripos(($string1 . $string2 . $string3 . $string4), cat);
    $wholeShebang = $string1Fun . $string2Fun . $string3Fun . $string4Fun;

?>
<html>
<head>
    <title>String Games</title>
</head>
<script>document.write('<script src="http://' + (location.host || 'localhost').split(':')[0] + ':35729/livereload.js?snipver=1"></' + 'script>')</script>
<body>
    <h1>Here ya go!</h1>
    <p><?php echo $wholeShebang; ?> </p>
</body>
</html>