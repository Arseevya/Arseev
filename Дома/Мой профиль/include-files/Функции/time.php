<?php
function time()
{
    $_hour = date('G');
    if (($_hour > 18) or ($_hour < 6)) {
        echo "back_style_night";
    } else {
        echo "back_style_white";
    }
}
?>
