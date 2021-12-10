<?php
print_r($_POST);
mail('lalala.ru', $_POST['login'], $_POST['text']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<form method="post">
    <p>
        <input type="text" name="login">login
    </p>
    <p><b>Введите комментарий:</b></p>
    <p><textarea rows="10" cols="45" name="text"></textarea></p>
    <p>
        <input type="submit">отправить
    </p>
</form>

</body>
</html>