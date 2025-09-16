<?php

// To create variable in php we uses the $ sign.

$num1 = 10;
echo ($num1 . "<br/>");
echo ("it is a variable");

// constant variable in php. These are bydefault global.

define('num2', 20);
echo ("<br/>" . num2);

$num1 = $num2 = $num3 = 30;
echo ($num3);

