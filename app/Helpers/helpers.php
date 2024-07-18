<?php

function env($key, $default = null)
{
    $value = $_ENV[$key];

    if ($value === false) {
//        return value($default);
        return $default;
    }

    switch (strtolower($value)) {
        case 'true':
        case '(true)':
            return true;

        case 'false':
        case '(false)':
            return false;

        case 'empty':
        case '(empty)':
            return '';

        case 'null':
        case '(null)':
            return;
    }

//    if (Str::startsWith($value, '"') && Str::endsWith($value, '"')) {
//        return substr($value, 1, -1);
//    }

    return $value;
}

function vardump($var)
{
    echo '<pre style="background-color:#000000;color:lime;padding:10px;">';
    var_dump($var);
    echo '</pre>';
}
