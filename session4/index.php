<?php 

$students = ["jude","max","peter"];
$studentData = [["jude",40,"dark"],["max",70,"fair"],["sam",50,"dark"]];

for($i = 0;$i < count($students); $i++){
  echo $students[$i]."<br>";
}


echo "<br><br>For Each <br><br><br>";

foreach($students as $key => $student){
  echo $student."<br>";
}

echo "<br><br>For Each <br><br><br>";
echo "<pre>";

foreach($studentData as $key => $value){
  print_r($value[0]);
  echo "<br>";
}