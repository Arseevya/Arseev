<?php
$name = sha1('admin');
$pass = sha1('root');
echo '<pre>';
print_r($_SERVER);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<?php
if (isset($_POST['login'])):
    $user_login = sha1($_POST['login']);
    $user_pass = sha1($_POST['password']);
    echo ($name == $user_login && $pass == $user_pass) ?
        '<p>Доступ открыт' : '<p>Неверная пара логин-пароль</p>';
else:
    ?>
    <form method="post" action="<?= $_SERVER['PHP_SELF'] ?>">
        <label for="login">Имя пользователя</label>
        <input type="text" name="login" id="login"><br>
        <label for="password">Пароль</label>
        <input type="password" name="password"><br>
        <input type="submit" name="submit" value="Проверить">
    </form>
<? endif; ?>
</body>
</html>