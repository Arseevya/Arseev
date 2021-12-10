<?php
if ($_GET['login'] == 'admin' && $_GET['password'] == 'admin') {
    echo 'доступ к секретным функциям открыт';
} else echo 'вы ввели неправвильные данные';
print_r($_GET);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<form method="get">
    <p>
        <select name="login" id="login">
            <option value="user">user</option>
            <option value="moderator">moderator</option>
            <option value="admin">admin</option>
    </p>
    <p><input type="password" name="password"></p>
    <p><input type="submit"></p>


</form>
</body>
</html>