<?php
$hostname = 'localhost';
$username = 'ARS';
$password = 'wm/ZOBd0-S.v8y_A';
$dbname = 'my city';
$dbconnect = mysqli_connect($hostname, $username, $password, $dbname);
//1 Задача
$select = mysqli_query($dbconnect, "SELECT name FROM `person` ");
$arr_select=mysqli_fetch_all($select,MYSQLI_ASSOC);
echo '<pre>';
print_r($arr_select);
echo  '<pre>';
foreach ($arr_select as $mas ){foreach ($mas as $ID=>$name)
    if($ID=='name'){
        echo "<br> $name";
    }
}
