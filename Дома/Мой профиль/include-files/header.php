<?php
include_once $_SERVER["DOCUMENT_ROOT"] . '\Дома\Мой профиль\include-files\Функции\time.php';
include_once $_SERVER["DOCUMENT_ROOT"] . '\Дома\Мой профиль\include-files\Функции\first phrase.php';
include_once $_SERVER["DOCUMENT_ROOT"] . '\Дома\Мой профиль\include-files\Функции\color word.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Арсеев Александр</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="/Arseev/Дома/Мой профиль/include-files/styles.css">
</head>
<body class="container_all" id="<?= timeCustom() ?>">
<div class="container">
    <header class="d-flex justify-content-center py-3">
        <ul class="nav nav-pills">
            <li class="nav-item"><a href="/Arseev/Дома/Мой профиль/Myprofile/Myprofile.php" class="nav-link active" aria-current="page">Профиль</a></li>
            <li class="nav-item"><a href="/Arseev/Дома/Мой профиль/Anketa/Anketa.php" class="nav-link">Анкета</a></li>
            <li class="nav-item"><a href="/Arseev/Дома/Table of Mendeleev/Teable_Mendeleev.php" class="nav-link">Таблица
                    Менделеева</a></li>
            <li class="nav-item"><a href="/Arseev/Дома/Массивы/Массивы.php" class="nav-link">Массивы</a></li>
            <li class="nav-item"><a href="/Arseev/Дома/Мой профиль/Slider/slider.php" class="nav-link">Слайдер</a></li>
        </ul>
        <div class="col-md-3 text-end">
            <a href="/Arseev/Дома/Мой профиль/Authorization/Authorization.php">
                <button type="button" class="btn btn-outline-primary me-2">Авторизация</button>
            </a>
            <a href="/Arseev/Дома/Мой профиль/Registration/Registration.php">
                <button type="button" class="btn btn-primary">Регистрация</button>
            </a>
        </div>
    </header>