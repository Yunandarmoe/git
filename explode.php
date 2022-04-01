<?php

// explode --> string to array

$date = "3/20/2022"; // 20 March, 2022
$result = explode("/", $date);
$day = $result[1];
$month = $result[0];
$year = $result[2];

switch ($month) {
  case 1:
    $month = "Jan";
  break;
  case 2:
    $month = "Feb";
  break;
  case 3:
    $month = "March";
  break;
}

echo "$day $month, $year";
echo "<br>"; // 20 March, 2022

// implode --> array to string

$user = ["Aye Aye", 23, "Yangon"];

$result01 = implode(",", $user);

echo $result01; // Aye Aye,23,Yangon
