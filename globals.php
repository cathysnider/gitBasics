<?php

/*
$linebreak = "</br />";
$paragraph = '<p>&nbsp;</p>';
$spaces = '&nbsp; &nbsp; ';

echo $linebreak;
echo $paragraph;
echo $spaces;
*/

echo "<h1>Super Globals</h1>";

$GLOBALS;
$_SERVER;
$_GET;
$_POST;
$_COOKIE;
$_FILES;
$_ENV;
$_REQUEST;
$_SESSION;

echo "<h2>SERVER</h2>";
foreach ($_SERVER as $num) {
    print $num . '<br />';
}
echo $linebreak;

echo "<h2>FILES</h2>";
foreach ($_FILES as $num) {
    print $num . '<br />';
}
echo $linebreak;

echo "<h2>REQUEST</h2>";
foreach ($_REQUEST as $num) {
    print $num . '<br />';
}







?>