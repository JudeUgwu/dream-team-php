<?php 
require_once "Database.php";

require_once "User.php";

$userObject = new User("jude","jude@gmail.com","secret");
$userObject2 = new User("max","max@gmail.com","secret");
// $userObject2->username = "Mathew";
// $userObject2->email = "mat@gmail.com";
// $userObject2->password = "secret";
// $userObject2->status = 3;
// $userObject2->setRole(3);





// $userObject->username = "Jude";
echo "<pre>";
print_r($userObject);
print_r($userObject2);

$userObject->register();
echo "<br>";
$userObject->login();
echo "<br>";

$userObject->setUsername("James");
echo "<br>";
$userObject2->register();

print_r($userObject);
echo "<br>";

echo "Your username is ".$userObject->getUsername();

echo "<br>";
$userObject->checkConnnection();
