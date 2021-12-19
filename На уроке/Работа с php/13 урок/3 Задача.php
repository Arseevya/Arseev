<?php
setcookie('name', $_POST['login']);
if (isset($_POST['submit'])) {
    if ($_COOKIE['name'] == 'Tom') {
        $a = $_COOKIE['tom'] + 1;
        echo $_COOKIE['name'] . "посетил сайт" . $_COOKIE['tom'] . " раз";
        setcookie('Tom', $a);
    }else{
        $b=$_COOKIE['Bob']+1;
        echo $_COOKIE['name']."посетил сайт".$_COOKIE["Bob"]." раз";
        setcookie('bob',$b);
            }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<form method="post">
    <label>Вы поситилли сайт
    <input type="text" name="login">
    <input type="submit" name="submit">
    </label>
</form>
</body>
</html>