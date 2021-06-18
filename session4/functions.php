<?php

try{
  echo 300/0;
}
catch(Exception $e){
  echo "hello";
}

date_default_timezone_set("Africa/Lagos");
$numAry = [34,55,66,88];
echo 'The min number here is '.pow(min($numAry),2).' <br>';
echo 'The random here is '.rand(100,1000000).' <br>';
echo '<br><br>String Methods<br><br>';
echo 'The bin2hex here is '.(base_convert(bin2hex("somto"),16,2)).' <br>';
echo strtotime('12-12-2007')."<br>";
echo times().uniqid()."<br>";

echo date('d M,Y h:m:s:a',strtotime('12-12-2007')).'<br>';


$number = (int) 40.33;
echo $number;