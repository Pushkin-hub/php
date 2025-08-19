<?php
$tag = 'div';
$background_color = '#f0f8ff';
$color           = '#333333';
$width           = '200px';
$height          = '100px';

$style = "background-color:{$background_color}; color:{$color}; width:{$width}; height:{$height};";

echo "<{$tag} style=\"{$style}\">Это динамический блок.</{$tag}>";?>
