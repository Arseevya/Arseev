<?php
function first_phrase($text)
{
    $text_arr = explode('.', $text);
    $text_arr[0] = "<span style='color: blue'>$text_arr[0]</span>";
    $about_info = implode('. ', $text_arr);
    return $about_info;
}

?>