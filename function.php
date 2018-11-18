<?php

/**
 * Функция - шаблонизатор
 *
 * @param $pathTemp string
 * @param $var array
 *
 * @return string
 *
 */
function renderTemplate($pathTemp,$var){
    if(!file_exists($pathTemp)){
        return '';
    }
    ob_start();
    extract($var);
    require($pathTemp);
    return ob_get_clean();
}