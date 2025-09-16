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

// heredoc in php
print("<br/>");
echo <<< mytag
    "This is me learning php
    and you should also"
    mytag;

// data types in php

$num1 = 10;
echo (var_dump($num1));

$num1 = 20.2;
echo (var_dump($num1));

$num1 = 'hello';
echo (var_dump($num1));

$num1 = "hello";
echo (var_dump($num1));

$num1 = true;
echo (var_dump($num1));

$num1 = null;
echo (var_dump($num1));

$num1 = array(1, 'swkjdbc', 'skdhbx');
echo (var_dump($num1));


// constant variables
print("<br/>------------------------------<br/>");
define('var1', "akshir");
echo (var1);
print("<br/>------------------------------<br/>");
const var2 = "Akshit";
print(var2);
print("<br/>------------------------------<br/>");
