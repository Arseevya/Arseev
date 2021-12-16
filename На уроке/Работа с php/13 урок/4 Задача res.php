<?php
session_start();
$_SESSION['task3Answer'] = $_POST['answer'];
echo 'Ответ задачи №1: ' . $_SESSION['task1Answer'] . "<br>";
echo 'Ответ задачи №2: ' . $_SESSION['task2Answer'] . "<br>";
echo 'Ответ задачи №3: ' . $_SESSION['task3Answer'] . "<br>";
$num = 0;
if ($_SESSION['task1Answer'] == 6) {
    $num++;
} else {
    echo 'Неправильный ответ в задче №1' . "<br>";
}
if ($_SESSION['task2Answer'] == 9) {
    $num++;
} else {
    echo 'Неправильный ответ в задче №2' . "<br>";
}
if ($_SESSION['task3Answer'] == 15) {
    $num++;
} else {
    echo 'Неправильный ответ в задче №3' . "<br>";
}
echo 'Всего баллов:' . $num . "<br>";
?>
