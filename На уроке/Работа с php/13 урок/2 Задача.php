<?php
if (!isset($_COOKIE['login'])) {
    $g = 0;
} else {
    $g = $_COOKIE[';login'] + 1;
}
setcookie('login', $g, time() + 3600 * 24 * 7);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<p>Здорова
    <?php echo "<br>";
    echo 'Вы поситли наш сайт ' . $g; ?></p>

</body>
</html>