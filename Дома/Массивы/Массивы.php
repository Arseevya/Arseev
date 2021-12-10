<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Массивы</title>
</head>
<body>
<header><?php include '..\Мой профиль\include-files\header.txt'
    ?>
</header>
<main>
    <code>
        Первая задача<br>
        <?php
        $_massiv = [];
        for ($i = 0; $i < 10; $i++) $_massiv[] = mt_rand(0, 100);
        foreach ($_massiv as $_el) {
            if ($_el % 2 == 0) {
                $_result = "<b>$_el</b>";
            } else $_result = $_el;
            echo "$_result <br>";
        }
        ?>
        Вторая задача<?php
        $_massive = [["огурец", "помидор", "томат", "аэропорт", "Анадырь", "Аргентина", "перчатка"]];
        foreach ($_massive as $_first_dimension) {
            foreach ($_first_dimension as $_word) {
                if (substr($_word, 0, 2) == "А") {
                    echo "<br>$_word <br>";
                }
            }
        }
        ?>
        Третья задача<br>
        <?php
        $all_sum = 0;
        $massive = [[8, 3, 7, 9, 5, 5, 7]];
        for ($i = 0, $num_massive = count($massive); $i < $num_massive; $i++) {
            for ($m = 0, $sub_num_massive = count($massive[$i]); $sub_num_massive > $m; $m++) {
                $demension_1 = $i + 1;
                $demension_2 = $m + 1;

            }
        }
        $all_sum = $demension_1 * $demension_2;
        echo "Общее количество-$all_sum<br>" . "1 измерение-$demension_1<br> " . "2 измерение-$demension_2<br>"; ?>


    </code>
</main>
<footer><?php
    include '..\Мой профиль\include-files\footer.txt'
    ?></footer>
</body>
</html>