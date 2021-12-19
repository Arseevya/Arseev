<?php
setcookie('login','user',time()+3600*24*7);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<p>Hello <?=$_COOKIE['login']?></p>
</body>
</html>