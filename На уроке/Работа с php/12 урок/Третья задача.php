<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<form method="post">
    <select name="user">
        <option value="1">Лаб1</option>
        <option value="2">Лаб2</option>
        <option value="3">Лаб3</option>
        <option value="4">Лаб4</option>
    </select>
    <p><a href="phpcource.php" -->phpcourse.php?l=<?= $_POST['user'] ?></a></p>
    <p>
        <input type="submit">
    </p>
</form>

</body>
</html>