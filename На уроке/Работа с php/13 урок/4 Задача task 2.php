<?php
session_start();
$_SESSION['task1Answer'] = $_POST['answer'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<p>Сколько будет 5+4</p>
<form action="4%20Задача%20task%203.php" method="post">
    <input type="text" name="answer">
    <input type="submit">
</form>
<a href="4%20Задача%20task%203.php">Следующая задача</a>

</body>
</html>