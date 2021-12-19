<?php require $_SERVER["DOCUMENT_ROOT"] . '\Дома\Мой профиль\include-files\header.php' ?>
    <main>
        <section class="about_me">
            <div class="myfoto" >
                <img style='float:left;width:400px;height:500px; margin-right:10px;' src="../Фото/CZAPOYK-Qlw.jpg"/>
            </div>
            <h2 class="name"><?php $_name = "Арсеев Александр"; echo $_name; ?></h2>
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
        </section>
        <br>
        <section><?php
            $totalWords = str_word_count($_name . $_text1 . $_text2);
            $totalVowels = preg_match_all('/[аеёиоуыэюяaeiou]/iu', $_name . $_text1 . $_text2);
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
            ?>
        </section>
    </main>
<?php require $_SERVER["DOCUMENT_ROOT"] . '\Дома\Мой профиль\include-files\footer.php' ?>