<?php
if (!function_exists('replaceToken')) {
    function replaceToken($string, $token, $replacement) {
    $search = '{{' . $token . '}}';
    return str_replace($search, $replacement, $string);
}
}


