<?php 

$number = 50;

function numberChanger($num = 30){
    global $number;
    $number = 4;
    $num = ($num*2);
    echo "Number has been changed to ".$num;
}


function add():int
{
  return 0;
}

add();
echo "<br>The value of the global number is still $number <br>";

numberChanger();
echo "<br>The value of the global number is still $number <br>";

