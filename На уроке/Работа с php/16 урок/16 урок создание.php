<?php
$hostname = 'localhost';
$username = 'ARS';
$password = 'wm/ZOBd0-S.v8y_A';
$dbname = 'newcity';
$dbconnect = mysqli_connect($hostname, $username, $password,$dbname) or die ("-");
//var_dump($dbconnect);
mysqli_set_charset($dbconnect, 'utf8');
//mysqli_query($dbconnect, "CREATE DATABASE $dbname");
mysqli_select_db($dbconnect, $dbname);
/*mysqli_query($dbconnect,"CREATE TABLE people
(
    id      INTEGER AUTO_INCREMENT PRIMARY KEY,
    name    VARCHAR(30),
    surname VARCHAR(30),
    age     INTEGER
);");
mysqli_query($dbconnect,"INSERT INTO people (id, name, surname, age)
VALUES (null, 'Kimi', 'RAikkonnen', 42)");
mysqli_query($dbconnect,"INSERT INTO people (id, name, surname, age)
VALUES (null, 'Max', 'RAikkonnen', 24)");
mysqli_query($dbconnect,"INSERT INTO people (id, name, surname, age)
VALUES (null, 'Kimi', 'RAikkonnen', 35)");

mysqli_query($dbconnect,"CREATE TABLE hobby
(
    id          INTEGER AUTO_INCREMENT PRIMARY KEY,
    name        VARCHAR(30),
    discription VARCHAR(30)
);");
mysqli_query($dbconnect,"INSERT INTO hobby (id, name, discription)
VALUES (null, 'Формула-1', 'Смотреть гонки')");
mysqli_query($dbconnect,"INSERT INTO hobby (id, name, discription)
VALUES (null, 'Хоккей', 'Смотреть хоккей')");*/
/*mysqli_query($dbconnect,"INSERT INTO hobby (id, name, discription)
VALUES (null, 'Писать код', 'Придумывать архитектуру')");*/

mysqli_query($dbconnect, "CREATE TABLE people_hobbies
(
    ID_record  INT NOT NULL AUTO_INCREMENT,
    ID_person  INT,
    ID_HOBBIES INT,
    PRIMARY KEY (ID_record),
    FOREIGN KEY (ID_person) REFERENCES people (id),
    FOREIGN KEY (ID_HOBBIES) REFERENCES hobby (id));");
mysqli_query($dbconnect, "INSERT INTO people_hobbies
VALUES (NULL, '1', '1'),
       (NULL, '2', '2'),
       (NULL, '3', '3'),
       (NULL, '1', '3');");
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