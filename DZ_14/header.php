<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name'); ?> - <?php bloginfo('description'); ?></title>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

    <header class="header">
        <div class="container">
            <div class="header-content">
                <a href="<?php echo home_url(); ?>" class="logo">Polygon</a>
                
                <nav>
                    <ul class="nav-menu">
                        <li><a href="#about">О курсе</a></li>
                        <li><a href="#curriculum">Программа</a></li>
                        <li><a href="#mentor">Наставник</a></li>
                        <li><a href="#gallery">Галерея</a></li>
                        <li><a href="#testimonials">Отзывы</a></li>
                        <li><a href="#registration" class="cta-button">Записаться</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>
</body>
</html>