<?php
print_r($_GET);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<form>
    <p>
    <fieldset>
        <input type="checkbox" name="1" value="a">
        <input type="checkbox" name="2" value="b">
        <input type="checkbox" name="3" value="c">
        <input type="checkbox" name="4" value="d">
        <input type="checkbox" name="5" value="y"></fieldset>
    </p>
    <input type="textarea" name="многострочный текст">
    <p>
    <fieldset>
        <input type="radio" name="1" value="czxc">czxc
        <input type="radio" name="1" value="d">d
        <input type="radio" name="1" value="e">e
        <input type="radio" name="1" value="r"> r
    </fieldset>
    </p>
    <input type="submit" value="отправка">
</form>
</body>
</html>