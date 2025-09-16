<?php

function fun1()
{
  echo ("This is function one call");
}

fun1();

print("<br/>---------------------------------<br/>");

function fun2(&$var)
{
  $var += $var;
  echo ($var);
}

$var = 10;
fun2($var);
print("<br/>---------------------------------<br/>");
echo ($var);

print("<br/>---------------------------------<br/>");

$myfun = function () {
  echo ("This is variable function");
};

$myfun();
