<?php
function xsspurify($text){
    $pattern = '<script>';
    return preg_replace($pattern, '<scrpti>', $text);
}
?>