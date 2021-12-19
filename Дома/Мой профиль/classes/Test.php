<?php


class Test
{

    //получаем соединение с БД
    public function getDBConnection()
    {
        $hostname = 'localhost';
        $username = 'ARS';
        $password = 'wm/ZOBd0-S.v8y_A';
        $dbname = 'testars';
        $dbconnect = mysqli_connect($hostname, $username, $password, $dbname);
        mysqli_set_charset($dbconnect, 'utf8');
        return $dbconnect;
    }

    //Проверка авторизации
    public function checkAuth($post)
    {
        //INSERT INTO `users` (`fio`, `login`, `pass`) VALUES ('Арсеев Александр', 'ars', '123'); - можно использовать для регистрации
        $dbconnect = \Test::getDBConnection(); // так получаем соединение с базой для проверки
        if (!$dbconnect) {
            echo 'нет соединения';
        }
        $sql = "SELECT fio FROM testars.users where login ='" .$post['login'] . "' and pass ='" . $post['pass'] . "'";
        //print_r($sql);
        $query = mysqli_query(
            $dbconnect,
            $sql
        );
        if (!$query) {
            print_r(mysqli_error($dbconnect));
        }
        $arr_select = mysqli_fetch_all($query, MYSQLI_ASSOC);
        //возвращать false либо массив из базы данных (чтобы вывести имя)
        return $arr_select ? $arr_select[0] : false;
    }

    public function regUser($post)
    {
        $dbconnect = \Test::getDBConnection(); // так получаем соединение с базой для проверки
        if (!$dbconnect) {
            echo 'нет соединения';
            return false;
        }
        if ($post['pass'] === $post['pass-repeat']) {
            $sql = "INSERT INTO users VALUES ('NULL'" . ",'" . sha1($post['login']) . "','" . sha1($post['pass']) . "')";

            $query = mysqli_query(
                $dbconnect,
                $sql);

            if (!$query) {
                print_r(mysqli_error($dbconnect));
                return false;
            }

        } else {
            return false;
        }
        return true;
    }

}