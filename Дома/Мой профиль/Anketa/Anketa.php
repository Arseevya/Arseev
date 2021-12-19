<?php require $_SERVER["DOCUMENT_ROOT"] . '\Дома\Мой профиль\include-files\header.php' ?>
<?php
if (!empty($_POST)) {
    echo shet($_POST);
} else {
    ?>
    <form action="" method="post" style="margin: 0 auto; width:650px;">
        <fieldset>
            <p><label>1. Считаете ли Вы, что у многих ваших знакомых хороший характер? </label>
                <br>
                <input type="radio" name="v1" value="1" checked>да
                <br>
                <input type="radio" name="v1" value="0">нет
                <br>
            <p><label>2. Раздражают ли Вас мелкие повседневные обязанности? </label>
                <br>
                <input type="radio" name="v2" value="1" checked>да
                <br>
                <input type="radio" name="v2" value="0">нет
                <br>
            <p><label>3. Верите ли Вы, что ваши друзья преданы Вам? </label>
                <br>
                <input type="radio" name="v3" value="1" checked>да
                <br>
                <input type="radio" name="v3" value="0">нет
                <br>
            <p><label>4. Неприятно ли Вам, когда незнакомый человек делает Вам замечание? </label>
                <br>
                <input type="radio" name="v4" value="1" checked>да
                <br>
                <input type="radio" name="v4" value="0">нет
                <br>
            <p><label>5. Способны ли Вы ударить собаку или кошку? </label>
                <br>
                <input type="radio" name="v5" value="1" checked>да
                <br>
                <input type="radio" name="v5" value="0">нет
                <br>
            <p><label>6. Часто ли Вы принимаете лекарства?</label>
                <br>
                <input type="radio" name="v6" value="1" checked>да
                <br>
                <input type="radio" name="v6" value="0">нет
                <br>
            <p><label>7. Часто ли Вы меняете магазин, в который ходите за продуктами? </label>
                <br>
                <input type="radio" name="v7" value="1" checked>да
                <br>
                <input type="radio" name="v7" value="0">нет
                <br>
            <p><label>8. Продолжаете ли Вы отстаивать свою точку зрения, поняв, что ошиблись? </label>
                <br>
                <input type="radio" name="v8" value="1" checked>да
                <br>
                <input type="radio" name="v8" value="0">нет
                <br>
            <p><label>9. Тяготят ли Вас общественные обязанности? </label>
                <br>
                <input type="radio" name="v9" value="1" checked>да
                <br>
                <input type="radio" name="v9" value="0">нет
                <br>
            <p><label>10. Способны ли Вы ждать более 5 минут, не проявляя беспокойства? </label>
                <br>
                <input type="radio" name="v10" value="1" checked>да
                <br>
                <input type="radio" name="v10" value="0">нет
                <br>
            <p><label>11. Часто ли Вам приходят в голову мысли о Вашей невезучести? </label>
                <br>
                <input type="radio" name="v11" value="1" checked>да
                <br>
                <input type="radio" name="v11" value="0">нет
                <br>
            <p><label>12. Сохранилась ли у Вас фигура по сравнению с прошлым? </label>
                <br>
                <input type="radio" name="v12" value="1" checked>да
                <br>
                <input type="radio" name="v12" value="0">нет
                <br>
            <p><label>13. Можете ли Вы с улыбкой воспринимать подтрунивание друзей? </label>
                <br>
                <input type="radio" name="v13" value="1" checked>да
                <br>
                <input type="radio" name="v13" value="0">нет
                <br>
            <p><label>14. Нравится ли Вам семейная жизнь? </label>
                <br>
                <input type="radio" name="v14" value="1" checked>да
                <br>
                <input type="radio" name="v14" value="0">нет
                <br>
            <p><label>15. Злопамятны ли Вы?</label>
                <br>
                <input type="radio" name="v15" value="1" checked>да
                <br>
                <input type="radio" name="v15" value="0">нет
                <br>
            <p><label>16. Находите ли Вы, что стоит погода, типичная для данного времени года? </label>
                <br>
                <input type="radio" name="v16" value="1" checked>да
                <br>
                <input type="radio" name="v16" value="0">нет
                <br>
            <p><label>17. Случается ли Вам с утра быть в плохом настроении? </label>
                <br>
                <input type="radio" name="v17" value="1" checked>да
                <br>
                <input type="radio" name="v17" value="0">нет
                <br>
            <p><label>18. Раздражает ли Вас современная живопись? </label>
                <br>
                <input type="radio" name="v18" value="1" checked>да
                <br>
                <input type="radio" name="v18" value="0">нет
                <br>
            <p><label>19. Надоедает ли Вам присутствие чужих детей в доме более одного часа? </label>
                <br>
                <input type="radio" name="v19" value="1" checked>да
                <br>
                <input type="radio" name="v19" value="0">нет
                <br>
            <p>
                <button type="submit" class="btn btn-dark">Отправить форму</button>

        </fieldset>
    </form>
    <?php
}
function shet($data)
{
    $result = 0;
    $arrBallDa = [3, 9, 10, 13, 14, 19];
    $arrBallNet = [1, 2, 4, 5, 6, 7, 8, 11, 12, 15, 16, 17, 18];
    foreach ($data as $name => $value) {

        if (in_array(substr($name, 1), $arrBallDa) and ($value == 1)) {

            $result += 1;
        }
        if (in_array(substr($name, 1), $arrBallNet) and ($value == 0)) {
            $result += 1;
        }
    }
    if ($result > 15) {
        return 'У Вас покладистый характер';
    } elseif ($result > 8 and $result < 15) {
        return 'Вы не лишены недостатков, но с вами можно ладить';
    }
    return 'Вашим друзьям можно посочувствовать';

}

?>

<?php require $_SERVER["DOCUMENT_ROOT"] . '\Дома\Мой профиль\include-files\footer.php' ?>