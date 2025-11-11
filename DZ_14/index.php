<?php get_header(); ?>

<section class="hero">
    <div class="container">
        <div class="hero-content">
            <h1>Polygon: Введение в 3D</h1>
            <p class="hero-subtitle">От идеи до 3D-реальности. Создай свой первый цифровой мир.</p>
            
            <div class="features-grid">
                <div class="feature-item">
                    <div class="feature-icon">🎯</div>
                    <span>С нуля до первого проекта</span>
                </div>
                <div class="feature-item">
                    <div class="feature-icon">💻</div>
                    <span>Практика на реальных кейсах</span>
                </div>
                <div class="feature-item">
                    <div class="feature-icon">👨‍🏫</div>
                    <span>Поддержка наставника</span>
                </div>
                <div class="feature-item">
                    <div class="feature-icon">📁</div>
                    <span>Готовое портфолио</span>
                </div>
            </div>
            
            <div class="hero-buttons">
                <a href="#registration" class="cta-button">Записаться сейчас</a>
                <a href="#curriculum" class="cta-button secondary">Смотреть программу</a>
            </div>
        </div>
    </div>
</section>

<section id="about" class="section section-dark">
    <div class="container">
        <h2 class="section-title">Для кого этот курс?</h2>
        <div class="about-content">
            <div class="about-text">
                <p>Идеально подойдет для старшеклассников, студентов и всех, кто хочет освоить востребованную профессию в сфере 3D-графики.</p>
                
                <ul class="benefits-list">
                    <li>Мечтает создавать миры для игр и анимации</li>
                    <li>Хочет освоить востребованную профессию</li>
                    <li>Ищет творческое хобби с серьезными перспективами</li>
                </ul>
                
                <h3>Что вы получите по итогу:</h3>
                <ul class="benefits-list">
                    <li>Готовый 3D-проект (свой первый арт)</li>
                    <li>Базовые навыки работы в Blender</li>
                    <li>Понимание полного цикла создания 3D-графики</li>
                    <li>Сертификат об окончании курса</li>
                </ul>
            </div>
            <div class="about-image">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/about-image.jpg" alt="Процесс работы в 3D редакторе">
            </div>
        </div>
    </div>
</section>

<section id="curriculum" class="section section-light">
    <div class="container">
        <h2 class="section-title">Чему вы научитесь за 8 недель?</h2>
        <div class="curriculum-tabs">
            <div class="tab">
                <div class="tab-header">
                    <h3>Модуль 1: Интерфейс и основы</h3>
                    <span class="tab-icon">+</span>
                </div>
                <div class="tab-content">
                    <ul class="tab-list">
                        <li>Знакомство с интерфейсом Blender</li>
                        <li>Основные инструменты навигации</li>
                        <li>Примитивное моделирование</li>
                        <li>Работа с объектами и трансформации</li>
                    </ul>
                </div>
            </div>
            
            <div class="tab">
                <div class="tab-header">
                    <h3>Модуль 2: Моделирование</h3>
                    <span class="tab-icon">+</span>
                </div>
                <div class="tab-content">
                    <ul class="tab-list">
                        <li>Модификаторы и их применение</li>
                        <li>Работа с полигонами и сетками</li>
                        <li>Создание простого объекта (меч, шлем)</li>
                        <li>Техники оптимизации модели</li>
                    </ul>
                </div>
            </div>
            
            <div class="tab">
                <div class="tab-header">
                    <h3>Модуль 3: Материалы и текстуры</h3>
                    <span class="tab-icon">+</span>
                </div>
                <div class="tab-content">
                    <ul class="tab-list">
                        <li>UV-развертка</li>
                        <li>Создание реалистичных поверхностей</li>
                        <li>Работа с материалами</li>
                        <li>Текстурирование объектов</li>
                    </ul>
                </div>
            </div>
            
            <div class="tab">
                <div class="tab-header">
                    <h3>Модуль 4: Свет и камеры</h3>
                    <span class="tab-icon">+</span>
                </div>
                <div class="tab-content">
                    <ul class="tab-list">
                        <li>Основы композиции</li>
                        <li>Настройка освещения сцены</li>
                        <li>Работа с камерами</li>
                        <li>Создание атмосферы</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="mentor" class="section section-dark">
    <div class="container">
        <h2 class="section-title">Ваш проводник в мир 3D</h2>
        <div class="mentor-card">
            <div class="mentor-image">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/mentor.jpg" alt="Алексей Волков">
            </div>
            <h3 class="mentor-name">Алексей Волков</h3>
            <p class="mentor-role">3D-художник, преподаватель</p>
            <p class="mentor-bio">
                "Более 5 лет опыта в индустрии. Участвовал в создании проектов для мобильных игр и рекламных роликов. 
                Считает, что лучший способ научиться — делать самому, и готов показать вам самый короткий путь 
                от новичка до уверенного пользователя."
            </p>
        </div>
    </div>
</section>

<section id="gallery" class="section section-light">
    <div class="container">
        <h2 class="section-title">Работы наших студентов</h2>
        <div class="gallery-grid">
            <div class="gallery-item">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/gallery-1.jpg" alt="Работа студента 1">
            </div>
            <div class="gallery-item">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/gallery-2.jpg" alt="Работа студента 2">
            </div>
            <div class="gallery-item">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/gallery-3.jpg" alt="Работа студента 3">
            </div>
        </div>
    </div>
</section>

<section id="testimonials" class="section section-dark">
    <div class="container">
        <h2 class="section-title">Что говорят ученики?</h2>
        <div class="testimonials-grid">
            <div class="testimonial-card">
                <p class="testimonial-text">
                    "Никогда не думал, что смогу создать что-то подобное всего за 2 месяца. 
                    Курс построен очень логично, каждый урок — это новый шаг вперед."
                </p>
                <p class="testimonial-author">— Иван, студент</p>
            </div>
            <div class="testimonial-card">
                <p class="testimonial-text">
                    "Курс дал структуру. Теперь я понимаю, с чего начинать любой 3D-проект 
                    и как доводить его до качественного результата."
                </p>
                <p class="testimonial-author">— Мария, дизайнер</p>
            </div>
        </div>
    </div>
</section>

<section id="registration" class="section section-light">
    <div class="container">
        <h2 class="section-title">Готовы начать?</h2>
        <div class="contact-content">
            <div class="contact-form">
                <form id="course-registration">
                    <div class="form-group">
                        <label for="name">Имя</label>
                        <input type="text" id="name" name="name" required>
                    </div>
                    <div class="form-group">
                        <label for="email">E-mail</label>
                        <input type="email" id="email" name="email" required>
                    </div>
                    <div class="form-group">
                        <label for="phone">Телефон</label>
                        <input type="tel" id="phone" name="phone" required>
                    </div>
                    <div class="form-group">
                        <label for="message">Комментарий (необязательно)</label>
                        <textarea id="message" name="message" rows="4"></textarea>
                    </div>
                    <button type="submit" class="cta-button">Отправить заявку</button>
                </form>
            </div>
            <div class="contact-info">
                <h3>Контакты</h3>
                <ul class="contact-methods">
                    <li> +7 (XXX) XXX-XX-XX</li>
                    <li> hello@polygon-course.ru</li>
                    <li> Онлайн-формат</li>
                </ul>
                
                <div class="social-links">
                    <a href="#" class="social-link">VK</a>
                    <a href="#" class="social-link">TG</a>
                    <a href="#" class="social-link">YT</a>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>