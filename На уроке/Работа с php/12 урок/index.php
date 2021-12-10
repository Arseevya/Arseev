<?php
$id = isset($_GET['id']) ? $_GET['id'] : 3;
if (!($id >= 1 && $id <= 3)) {
    die('ввели неправильное значение');
}
/*print_r($_GET)*/
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<img src="<?= $id ?>.jpg">
<a href="index.php?id=<?= (($id < 3) ? $id + 1 : 1) ?>">вперед</a>
<a href="index.php?id=<?= (($id > 1) ? $id - 1 : 3) ?>">назад</a>
</body>
</html>