<?php

function buildMenu($menuItems) {
    echo "<ul>";
    foreach ($menuItems as $item) {
        list($text, $class) = $item;
        echo "<li class=\"$class\">$text</li>";
    }
    echo "</ul>";
}

$menu = [
    ['Главная', 'menu-item'],
    ['О нас', 'menu-item'],
    ['Контакты', 'menu-item']
];
buildMenu($menu);