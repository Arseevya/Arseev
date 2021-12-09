<?php
Date_default_timezone_set('Asia/Yekaterinburg');
function timeCustom()
{
    $_hour = date('G');
    if (($_hour > 20) or ($_hour < 8)) {
        return "back_style_night";
    } else {
        return "back_style_white";
    }
}
?>
