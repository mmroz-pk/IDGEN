<?php

$connect = pg_connect("host=<host_name> port=<port> dbname=<dbname> user=<user> password=<pass>");
$result = pg_query($connect, "SELECT * FROM fakenames order by RANDOM()");
$row = pg_fetch_object($result);

$name = $row->name."\n".$row->lastname;
$address = $row->address;
$city = $row->city;
$zip = $row->zip;
$state= $row->state;
$country = $row->country;
$dob = $row->dob;
$maiden = $row->maiden;
$pesel = $row->nationalid;
$phone = $row->phone;
$email = $row->email;


?>
