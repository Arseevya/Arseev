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
    <link rel="stylesheet" href="Table style Myprofile.css">
</head>
<!--container_all,чтобы все разметить id-включаю стили переключения фона-->
<body class="container_all" id="<?= timeCustom() ?>">
<header class="header">
    <!--    Включил текст-шаблон-->
    <?php require 'include-files\header.txt' ?>
</header>
<main>
    <section class="about_me">
        <div class="name"><h2><?php $_name = "Арсеев Александр";
                echo $_name; ?></h2></div>
        <div class="myfoto"><img src="Фото/CZAPOYK-Qlw.jpg" alt="это я"/></div>
        <div class="myinfo"><p><?php
                $_text1 = 'Хобби: времени хватает только, чтобы отдохнуть и провести время с близким.
                Создаю через приложение колоду флеш-карт для интервального повторения полученных знаний
                пройденного.
                Собираюсь восстановить знания по английскому и расширить словарный запас в сфере IT. Развиваю
                скоропечатание.
                <br>Работа: Работаю на ММК 2/2. Не нравится политика компании по подготовке кадров и характер
                моей
                работы.';
                echo first_phrase($_text1); ?></p></div>
        <div class="mycomment"><p><?php $_text2 = 'Понравилась система, где материал дается в формате, который позволяет хранить,
                повторять,
                извлекать информацию, т. е. гибкость. К тому же направленность преподавателя на создание
                атмосферы
                усвоения. Подход с желанием
                научить, а не тараторить без вовлечения в процесс за з.п.';
                echo colorWord($_text2); ?></p></div>
        <div class="hw">
            <ol><?php $ref0 = 'Ссылки на страницы ДЗ';
                echo $ref0; ?>
                <li><a href="../Table of Mendeleev/Teable_Mendeleev.html" title='Таблица Менделеева'> <?php $ref1 = 'Таблица
                        Менделеева';
                        echo $ref1; ?></a></li>
                <li><a href="../Массивы/Массивы.php" title="массивы" target="_blank"><?php $ref2 = 'Массивы';
                        echo $ref2; ?></a></li>
            </ol>


        </div>
    </section>
    <section class="pictureflex">
        <div>
            <img class="picture_one_flex" alt="пессель" src="Фото/фото флекс секции/i.jpg" width=480 height=380/>
            <cite class="text_of_picture_flex"><?php $pictureText = 'пессель';
                echo $pictureText; ?></cite>
        </div>
        <div>
            <img class="picture_two_flex" alt="олень" src="Фото/фото флекс секции/Без названия (1).jpg" width=480
                 height=380/>
            <cite class="text_of_picture_flex"><?php $pictureText1 = 'олень';
                echo $pictureText1; ?></cite>
        </div>
        <div>
            <img class="picture_three_flex" alt="дерево" src="Фото/фото флекс секции/Без названия (2).jpg" width=480
                 height=380/>
            <cite class="text_of_picture_flex"><?php $pictureText2 = 'дерево';
                echo $pictureText2; ?></cite>
        </div>
        <div>
            <img class="picture_four_flex" alt="Трава" src="Фото/фото флекс секции/Без названия.jpg" width=480
                 height=380/>
            <cite class="text_of_picture_flex"><?php $pictureText3 = 'Трава';
                echo $pictureText3; ?></cite>
        </div>
    </section>
    <section class="picturegrid">

        <div><img class="picture_one_grid" alt="" src="Фото/Фото грид секции/0_7c779_5df17311_orig.jpg" width=480
                  height=380/>
            <cite class="text_of_picture_grid"><?php $pictureText4 = 'пляж';
                echo $pictureText4; ?></cite>
        </div>
        <div><img class="picture_two_grid" alt="" src="Фото/Фото грид секции/multfilm_lyagushka_32117.jpg" width=480
                  height=380/>
            <cite class="text_of_picture_grid"><?php $pictureText5 = 'cтич';
                echo $pictureText5; ?></cite>
        </div>
        <div><img class="picture_three_grid" alt="" src="Фото/Фото грид секции/91e6d05dd40773292292bad5a75e75db.jpeg"
                  width=480 height=380/>
            <cite class="text_of_picture_grid"><?php $pictureText6 = 'корабль';
                echo $pictureText6; ?></cite>
        </div>
        <div><img class="picture_four_grid" alt="" src="Фото/Фото грид секции/images.jpg" width=480 height=380/>
            <cite class="text_of_picture_grid"><?php $pictureText7 = 'машина';
                echo $pictureText7 ?></cite></div>
    </section>
    <section><?php
        $totalWords = str_word_count($_name . $_text1 . $_text2 . $ref0 . $ref1 . $ref2 . $pictureText . $pictureText1 . $pictureText2 . $pictureText3 . $pictureText4 . $pictureText5 . $pictureText6 . $pictureText7);
        $totalVowels = preg_match_all('/[аеёиоуыэюяaeiou]/iu', $_name . $_text1 . $_text2 . $ref0 . $ref1 . $ref2 . $pictureText . $pictureText1 . $pictureText2 . $pictureText3 . $pictureText4 . $pictureText5 . $pictureText6 . $pictureText7);
        $dateAndTime = date('D, d-h-y H:i');
        $date = "28-06-96";
        $date = explode('-', $date);
        $current_date = explode('-', date('d-m-y'));
        $diff = ($current_date[0] - $date[0]) + ($current_date[1] - $date[1]) * 30.43 + ($current_date[2] - $date[2]) * 365.25;
        $diff = (int)$diff;
        echo "Слов на странице-$totalWords<br>";
        echo "Гласных на странице-$totalVowels<br>";
        echo "Мне $diff дней<br>";
        echo 'Сейчас:' . "$dateAndTime<br>";
        ?></section>
</main>
<!--    Включил текст-шаблон-->
<footer class="footer"><?php require 'include-files\footer.txt'
    ?></footer>
</body>
</html>