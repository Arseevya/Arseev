<?php
function colorWord($_text)
{
    $text_arr = explode(' ', $_text);
    foreach ($text_arr as $item => $value) {
        ($item % 2 == 0) ? $text_arr[$item] = "<span style='color: aqua'>$value</span> " : $text_arr[$item] = "<span style='color: coral'>$value</span>";
    }
    $about_comment = implode(' ', $text_arr);
    return $about_comment;
}

?>