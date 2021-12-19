<?php require $_SERVER["DOCUMENT_ROOT"] . '\Дома\Мой профиль\include-files\header.php' ?>
<?php
// подключение класса
include_once($_SERVER["DOCUMENT_ROOT"] . '\Дома\Мой профиль\classes\Test.php');
// проверка авторизации
$showForm = true;
if (!empty($_POST)) {
    $obj = new \Test;
    if($user = $obj->checkAuth($_POST)){
        // если логин и пароль найдены в БД то выводим Приветсвие
        echo 'Добро пожаловать, ' . $user['fio'];
        $showForm = false;
    } else {
        // в противном случае ошибку
        echo 'Неверный логин или пароль';
    }
}

if ($showForm) {
?>
<form action="" method="post">
    <div class="hat">
        <h1>Войти</h1>
        <p>Пожалуйста, заполните эту форму, чтобы войти в учетную запись.</p>
        <hr>
        <label for="email"><b>Email</b></label>
        <input type="text" placeholder="Enter Email" name="login" required>

        <label for="psw"><b>Password</b></label>
        <input type="password" placeholder="Enter Password" name="pass" required>
        <hr>
        <button type="submit" class="fbtn">Войти</button>
    </div>

    <div class="containerSignIn">
        <p>Нет аккаунта? <a href="/Arseev/Дома/Мой профиль/Registration/Registration.php">Зарегистрироваться</a>.</p>
    </div>
</form>
<?php
}
?>
<?php require $_SERVER["DOCUMENT_ROOT"] . '\Дома\Мой профиль\include-files\footer.php' ?>
