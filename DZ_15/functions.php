<?php
function codemaster_theme_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('custom-logo');
    add_theme_support('html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
    ));
    
    register_nav_menus(array(
        'primary' => 'Основное меню'
    ));
    
    add_image_size('mentor-thumb', 400, 400, true);
}
add_action('after_setup_theme', 'codemaster_theme_setup');

function codemaster_theme_scripts() {
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&family=Inter:wght@300;400;500;600&display=swap');
    
    wp_enqueue_style('main-style', get_stylesheet_uri());
    
    wp_enqueue_script('main-js', get_template_directory_uri() . '/js/main.js', array(), '1.0.0', true);
}
add_action('wp_enqueue_scripts', 'codemaster_theme_scripts');

function create_course_post_types() {
    register_post_type('mentors',
        array(
            'labels' => array(
                'name' => __('Преподаватели'),
                'singular_name' => __('Преподаватель')
            ),
            'public' => true,
            'has_archive' => false,
            'supports' => array('title', 'editor', 'thumbnail'),
            'menu_icon' => 'dashicons-businessperson',
            'show_in_rest' => true
        )
    );

    register_post_type('testimonials',
        array(
            'labels' => array(
                'name' => __('Отзывы'),
                'singular_name' => __('Отзыв')
            ),
            'public' => true,
            'has_archive' => false,
            'supports' => array('title', 'editor', 'thumbnail'),
            'menu_icon' => 'dashicons-testimonial'
        )
    );
}
add_action('init', 'create_course_post_types');

function contact_form_shortcode() {
    ob_start();
    ?>
    <div class="contact-form">
        <form id="course-registration" method="post">
            <div class="form-group">
                <label for="name">Полное имя *</label>
                <input type="text" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="email">Email *</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="phone">Телефон *</label>
                <input type="tel" id="phone" name="phone" required>
            </div>
            <div class="form-group">
                <label for="course">Интересующий курс</label>
                <select id="course" name="course">
                    <option value="web-dev">Web-разработка</option>
                    <option value="python">Python</option>
                    <option value="js">JavaScript</option>
                    <option value="other">Другое</option>
                </select>
            </div>
            <div class="form-group">
                <label for="message">Дополнительная информация</label>
                <textarea id="message" name="message" rows="4" placeholder="Расскажите о ваших целях..."></textarea>
            </div>
            <button type="submit" class="cta-button">Отправить заявку</button>
        </form>
    </div>
    <?php
    return ob_get_clean();
}
add_shortcode('contact_form', 'contact_form_shortcode');
