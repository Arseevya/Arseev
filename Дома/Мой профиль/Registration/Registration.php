<?php require $_SERVER["DOCUMENT_ROOT"] . '\Дома\Мой профиль\include-files\header.php';?>
<?php
// подключение класса
include_once($_SERVER["DOCUMENT_ROOT"] . '\Дома\Мой профиль\classes\Test.php');
$showForm = true;
if (!empty($_POST)) {
    $obj = new \Test;
    if($user = $obj->regUser($_POST)){
        // если логин и пароль введены и пароли совпадают то
        echo 'вы зарегестрировались ';
        $showForm = false;
    } else {
        // в противном случае ошибку
        echo 'Данные введены неверно';
    }
}

if ($showForm) {
?>

<form action="" method="post">
    <div class="hat">
        <h1>Регистрация</h1>
        <p>Пожалуйста, заполните эту форму, чтобы создать учетную запись.</p>
        <hr>

        <label for="login"><b>Email</b></label>
        <input type="text" placeholder="Enter login" name="login" required>

        <label for="pass"><b>Password</b></label>
        <input type="password" placeholder="Enter Password" name="pass" required>

        <label for="pass-repeat"><b>Repeat Password</b></label>
        <input type="password" placeholder="Repeat Password" name="pass-repeat" required>
        <hr>

        <p>Создавая учетную запись, вы соглашаетесь с нашими <a href="#">Условия и конфиденциальность</a>.</p>
        <button type="submit" class="fbtn">Регистрация</button>
    </div>

    <div class="containerSignIn">
        <p>Уже есть аккаунт? <a href="/Arseev/Дома/Мой профиль/Authorization/Authorization.php">Войти</a>.</p>
    </div>
</form>
    <?php
}
?>
<?php require $_SERVER["DOCUMENT_ROOT"] . '\Дома\Мой профиль\include-files\footer.php' ?>