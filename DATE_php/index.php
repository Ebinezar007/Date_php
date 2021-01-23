<?php

$conn = new mysqli("localhost", "root", "", "aaa");

// Check connection
if ($conn->connect_errno) {
  echo "Failed to connect: " . $conn->connect_error;
  exit();
}
$asign = "SELECT currentdate FROM farm WHERE firstname='varun'";
$query = ($conn->query($asign));
$g=$query->fetch_all();
  print_r($g);
  $date1=date_create($g[0][0]);
  //below code interbetween the year ;
// $date2=date_create("2021-01-01");
//  $diff=date_diff($date1,$date2);
// echo $diff->format("%R%a days");
// echo  date('Y-m-d', strtotime($date1. + $date2 ));
date_add($date1,date_interval_create_from_date_string("5 days"));
echo date_format($date1,"Y-m-d");
// $adding=date_add($date1 , 3);
// echo $adding
?>