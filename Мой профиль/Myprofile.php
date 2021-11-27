<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Арсеев Александр</title>
    <link rel="stylesheet" href="Table style Myprofile.css">
</head>
<body class="container_all" id="<?php
$_hour = date('G');
if (($_hour > 18) or ($_hour < 6)) {
    echo "back_style_night";
} else {
    echo "back_style_white";
}
?>">
<header class="header">
    <h1>Мой профиль</h1>
</header>
<main>
    <section class="about_me">
        <div class="name"><h2>Арсеев Александр</h2></div>
        <div class="myfoto"><img src="Фото/CZAPOYK-Qlw.jpg" alt="это я"/></div>
        <div class="myinfo"><p>Хобби: времени хватает только, чтобы отдохнуть и провести время с близким.
                Создаю через приложение колоду флеш-карт для интервального повторения полученных знаний
                пройденного.
                Собираюсь
                восстановить знания по английскому и расширить словарный запас в сфере IT. Развиваю
                скоропечатание.
                <br>Работа: Работаю на ММК 2/2. Не нравится политика компании по подготовке кадров и характер
                моей
                работы
            </p></div>
        <div class="mycomment"><p>Понравилась система, где материал дается в формате, который позволяет хранить,
                повторять,
                извлекать информацию, т. е. гибкость. К тому же направленность преподавателя на создание
                атмосферы
                усвоения. Подход с желанием
                научить, а не тараторить без вовлечения в процесс за з.п.</p></div>
    </section>
    <section class="pictureflex">
        <div>
            <img class="picture_one_flex" alt="пессель" src="Фото/фото флекс секции/i.jpg" width=480 height=380/>
            <cite class="text_of_picture_flex">пессель</cite>
        </div>
        <div>
            <img class="picture_two_flex" alt="олень" src="Фото/фото флекс секции/Без названия (1).jpg" width=480
                 height=380/>
            <cite class="text_of_picture_flex">олень</cite>
        </div>
        <div>
            <img class="picture_three_flex" alt="дерево" src="Фото/фото флекс секции/Без названия (2).jpg" width=480
                 height=380/>
            <cite class="text_of_picture_flex">дерево</cite>
        </div>
        <div>
            <img class="picture_four_flex" alt="Трава" src="Фото/фото флекс секции/Без названия.jpg" width=480
                 height=380/>
            <cite class="text_of_picture_flex">Трава</cite>
        </div>
    </section>
    <section class="picturegrid">

        <div><img class="picture_one_grid" alt="" src="Фото/Фото грид секции/0_7c779_5df17311_orig.jpg" width=480
                  height=380/>
            <cite class="text_of_picture_grid">пляж</cite>
        </div>
        <div><img class="picture_two_grid" alt="" src="Фото/Фото грид секции/multfilm_lyagushka_32117.jpg" width=480
                  height=380/>
            <cite class="text_of_picture_grid">cтич</cite>
        </div>
        <div><img class="picture_three_grid" alt="" src="Фото/Фото грид секции/91e6d05dd40773292292bad5a75e75db.jpeg"
                  width=480 height=380/>
            <cite class="text_of_picture_grid">корабль</cite>
        </div>
        <div><img class="picture_four_grid" alt="" src="Фото/Фото грид секции/images.jpg" width=480 height=380/>
            <cite class="text_of_picture_grid">машина</cite></div>
    </section>
</main>
<div class="footer">
    <footer><h2><a target="_blank" href="https://vk.com/im?v=">мой vk</a></h2></footer>
</div>
</body>
</html>