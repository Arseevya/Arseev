<?php
$hostname = 'localhost';
$username = 'ARS';
$password = 'wm/ZOBd0-S.v8y_A';
$dbname = 'Newcity';
$dbconnect = mysqli_connect($hostname,$username, $password) or die ("-");
//var_dump($dbconnect);
mysqli_set_charset($dbconnect, 'utf8');
//mysqli_query($dbconnect, "CREATE DATABASE $dbname");
mysqli_select_db($dbconnect,$dbname);
mysqli_query($dbconnect,"CREATE TABLE people (id INTEGER AUTO_INCREMENT PRIMARY KEY, name VARCHAR(30), surname VARCHAR(30),age INTEGER);");
mysqli_query($dbconnect,"CREATE TABLE hobby (id INTEGER AUTO_INCREMENT PRIMARY KEY,name VARCHAR(30),discription VARCHAR(30) );");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>

</body>
</html>