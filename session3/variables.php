<?php 
  

  // passing by value
  $x = 40;
  echo "X is $x <br>";
  $y = $x;
  echo "Y is $y <br>";
  $y = 3;
  echo " X is $x and Y is $y <br>";

  // pass by reference
  $num1 = 50;
  echo "Num1 is $num1 <br>";
  $num2 = & $num1;
  echo "Num2 is $num2 <br>";
  $num2 = 70;
  $Num2  = 50;
  echo " Num1 is $num1 and Num2 is $num2";


  // creating constants in php
  define("PAYSTACK_SK","bfjvkjfdj,dfhdhvjhdfhjdfhjfdhdfhdfh");
  define("SENDGRID+__SK","bfjvkjfdj,vfgerteerrgttrh");
  define("REFERRAL_AMOUNT",2000);

  $message = "<br> Jude is a developer <br>";
  $referral_amount = 3000;
  function message(){
 

    $message = "<br>Welcome to our page<br>"; //local variable
    global $message;
    global $referral_amount;
    $referral_amount = "jude";

    $profit = (10/100 ) * $referral_amount;
    $amount = $current_ref_bonus + null;
    echo  "$message";
  }

  message();
  echo $message;









?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
    <p>Paystack Secret Key <?=PAYSTACK_SK?></p>
</body>
</html>