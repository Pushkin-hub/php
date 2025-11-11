<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name'); ?> - <?php bloginfo('description'); ?></title>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <footer class="footer">
        <div class="container">
            <div class="footer-content">
                <a href="<?php echo home_url(); ?>" class="logo">Polygon</a>
                <p>Polygon — курсы 3D-графики для начинающих.</p>
                
                <nav>
                    <ul class="nav-menu">
                        <li><a href="#about">О курсе</a></li>
                        <li><a href="#curriculum">Программа</a></li>
                        <li><a href="#mentor">Наставник</a></li>
                        <li><a href="#registration">Контакты</a></li>
                    </ul>
                </nav>
                
                <p class="copyright">© Polygon, <?php echo date('Y'); ?>. Все права защищены.</p>
            </div>
        </div>
    </footer>

<?php wp_footer(); ?>    
</body>
</html>