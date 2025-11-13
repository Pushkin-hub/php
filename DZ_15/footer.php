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
            <a href="<?php echo home_url(); ?>" class="logo">CodeMaster<span>Pro</span></a>
            
            <nav class="footer-nav">
                <a href="#about">О курсе</a>
                <a href="#curriculum">Программа</a>
                <a href="#mentors">Преподаватели</a>
                <a href="#registration">Контакты</a>
                <a href="#">Политика конфиденциальности</a>
            </nav>
            
            <p class="copyright">© CodeMaster Pro, <?php echo date('Y'); ?>. Все права защищены.</p>
        </div>
    </div>
</footer>
</body>
</html>