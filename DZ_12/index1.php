<?php
function count_char_in_string($string, $char) {
    return substr_count($string, $char);
}

function replace_char_in_string($string, $search_char, $replace_char) {
    return str_replace($search_char, $replace_char, $string);
}

function reverse_string($string) {
    return strrev($string);
}

function split_string_into_words($string) {
    return preg_split('/\s+/', trim($string));
}

function detect_alphabet($word) {
    $cyrillic_pattern = '/^[\p{Cyrillic}]+$/u';
    $latin_pattern = '/^[A-Za-z]+$/';

    if (preg_match($cyrillic_pattern, $word)) {
        return 'Cyrillic';
    } elseif (preg_match($latin_pattern, $word)) {
        return 'Latin';
    } else {
        return 'Unknown';
    }
}
?>