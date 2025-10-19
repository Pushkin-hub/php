<?php

function createHtmlElement($tag, $class) {
    echo "<$tag class=\"$class\">Это динамично созданный элемент</$tag>";
}

createHtmlElement('div', 'my-style');