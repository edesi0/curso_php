<?php
$x = 10;

$y =& $x;

echo("$x <br/>");
echo("$y <br/>");

$x = 20;
echo("$x <br/>");
echo("$y <br/>");