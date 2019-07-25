<?php

if (!function_exists('reading _time')) {
    function readingTime($post)
    {
        $word = str_word_count(strip_tags($post));
        $m = floor($word / 150);
        $est = $m . ' min' . ($m == 1 ? '' : 's') .' read';
        return $est;
    }
}