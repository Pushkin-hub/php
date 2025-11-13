<?php get_header(); ?>

<section class="hero">
    <div class="container">
        <div class="hero-content fade-in">
            <h1>CodeMaster <span>Pro</span></h1>
            <p class="hero-subtitle">Стань востребованным IT-специалистом с нуля. Практическое обучение с трудоустройством.</p>
            
            <div class="features-grid">
                <div class="feature-item">
                    <div class="feature-icon">🚀</div>
                    <h3>С нуля до PRO</h3>
                    <p>Обучение с самых основ до продвинутых тем</p>
                </div>
                <div class="feature-item">
                    <div class="feature-icon">💼</div>
                    <h3>Трудоустройство</h3>
                    <p>Помощь в составлении резюме и поиске работы</p>
                </div>
                <div class="feature-item">
                    <div class="feature-icon">👨‍🏫</div>
                    <h3>Менторство</h3>
                    <p>Поддержка опытных наставников 24/7</p>
                </div>
            </div>
            
            <div class="hero-buttons">
                <a href="#registration" class="cta-button">Начать обучение</a>
                <a href="#curriculum" class="cta-button secondary">Программа курса</a>
            </div>
        </div>
    </div>
</section>

<section id="about" class="section section-light">
    <div class="container">
        <h2 class="section-title">Почему выбирают <span>CodeMaster Pro</span>?</h2>
        <div class="about-content">
            <div class="about-text">
                <p>Мы создали уникальную образовательную платформу, где теория встречается с практикой. Наши студенты начинают работать над реальными проектами уже с первого месяца обучения.</p>
                
                <h3>Что вас ждет:</h3>
                <ul class="benefits-list">
                    <li>Практические задания и реальные проекты</li>
                    <li>Персональный ментор на всем пути обучения</li>
                    <li>Доступ к закрытому сообществу выпускников</li>
                    <li>Карьерные консультации и подготовка к собеседованиям</li>
                    <li>Пожизненный доступ к обновлениям курса</li>
                </ul>
                
                <div style="margin-top: 2rem; padding: 1.5rem; background: linear-gradient(135deg, #6a4c93, #e94584); border-radius: 10px; color: white;">
                    <h4 style="margin-bottom: 0.5rem;">🎯 Результат после курса:</h4>
                    <p style="margin: 0;">Полноценное портфолио из 5+ проектов, готовое резюме и уверенность для старта в IT-карьере.</p>
                </div>
            </div>
            <div class="about-image">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/coding-process.jpg" alt="Процесс программирования" style="width: 100%; height: auto; display: block;">
            </div>
        </div>
    </div>
</section>

<section id="curriculum" class="section section-dark">
    <div class="container">
        <h2 class="section-title">Программа <span>обучения</span></h2>
        <div class="curriculum-tabs">
            
            <div class="tab">
                <div class="tab-header">
                    <h3>🎯 Модуль 1: Основы программирования</h3>
                    <span class="tab-icon">+</span>
                </div>
                <div class="tab-content">
                    <ul class="tab-list">
                        <li>Введение в программирование</li>
                        <li>Основы алгоритмов и структур данных</li>
                        <li>Работа с Git и GitHub</li>
                        <li>Командная строка и основы Linux</li>
                        <li>Принципы ООП</li>
                        <li>Паттерны проектирования</li>
                        <li>Тестирование кода</li>
                        <li>Практический проект: Консольное приложение</li>
                    </ul>
                </div>
            </div>
            
            <div class="tab">
                <div class="tab-header">
                    <h3>🌐 Модуль 2: Web-разработка</h3>
                    <span class="tab-icon">+</span>
                </div>
                <div class="tab-content">
                    <ul class="tab-list">
                        <li>HTML5 и семантическая верстка</li>
                        <li>CSS3, Flexbox, Grid</li>
                        <li>Адаптивный дизайн</li>
                        <li>JavaScript ES6+</li>
                        <li>DOM manipulation</li>
                        <li>React.js основы</li>
                        <li>State management</li>
                        <li>Практический проект: Интернет-магазин</li>
                    </ul>
                </div>
            </div>
            
            <div class="tab">
                <div class="tab-header">
                    <h3>⚙️ Модуль 3: Backend разработка</h3>
                    <span class="tab-icon">+</span>
                </div>
                <div class="tab-content">
                    <ul class="tab-list">
                        <li>Node.js и Express.js</li>
                        <li>RESTful API design</li>
                        <li>Базы данных: SQL и NoSQL</li>
                        <li>Аутентификация и авторизация</li>
                        <li>Docker и контейнеризация</li>
                        <li>Основы DevOps</li>
                        <li>Тестирование API</li>
                        <li>Практический проект: REST API сервис</li>
                    </ul>
                </div>
            </div>
            
            <div class="tab">
                <div class="tab-header">
                    <h3>🚀 Модуль 4: Карьера и продвижение</h3>
                    <span class="tab-icon">+</span>
                </div>
                <div class="tab-content">
                    <ul class="tab-list">
                        <li>Составление IT-резюме</li>
                        <li>Подготовка к техническим собеседованиям</li>
                        <li>GitHub портфолио</li>
                        <li>Личный бренд разработчика</li>
                        <li>Фриланс vs Работа в компании</li>
                        <li>Переговоры о зарплате</li>
                        <li>Практический проект: Финальный проект + резюме</li>
                    </ul>
                </div>
            </div>
            
        </div>
    </div>
</section>

<section id="mentors" class="section section-light">
    <div class="container">
        <h2 class="section-title">Наши <span>преподаватели</span></h2>
        <div class="mentors-grid">
            
            <div class="mentor-card">
                <div class="mentor-image">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/mentor1.jpg" alt="Анна Петрова">
                </div>
                <h3 class="mentor-name">Анна Петрова</h3>
                <p class="mentor-role">Senior FullStack Developer</p>
                <p class="mentor-bio">8+ лет в разработке. Работала в Yandex и Tinkoff. Специализируется на React и Node.js. Помогла 200+ студентам начать карьеру в IT.</p>
            </div>
            
            <div class="mentor-card">
                <div class="mentor-image">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/mentor2.jpg" alt="Максим Иванов">
                </div>
                <h3 class="mentor-name">Максим Иванов</h3>
                <p class="mentor-role">Tech Lead</p>
                <p class="mentor-bio">10+ лет опыта. Руководил командами в Avito и Ozon. Эксперт в архитектуре приложений и DevOps. Сертифицированный AWS architect.</p>
            </div>
            
            <div class="mentor-card">
                <div class="mentor-image">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/mentor3.jpg" alt="Дарья Сидорова">
                </div>
                <h3 class="mentor-name">Дарья Сидорова</h3>
                <p class="mentor-role">Frontend Architect</p>
                <p class="mentor-bio">6+ лет в frontend разработке. Работала над проектами для Сбера и МТС. Специализация: Vue.js, performance optimization, PWA.</p>
            </div>
            
        </div>
    </div>
</section>

<section id="registration" class="section section-dark">
    <div class="container">
        <h2 class="section-title">Начни свой путь в <span>IT</span></h2>
        <div class="contact-content">
            
            <div class="contact-form">
                <h3>Оставь заявку</h3>
                <p style="margin-bottom: 2rem; color: var(--gray);">Мы свяжемся с тобой в течение 2 часов для консультации</p>
                
                <?php echo do_shortcode('[contact_form]'); ?>
            </div>
            
            <div class="contact-info">
                <h3>Контакты</h3>
                <p>Есть вопросы? Мы всегда на связи!</p>
                
                <ul class="contact-methods">
                    <li>📞 +7 (999) 123-45-67</li>
                    <li>✉️ hello@codemaster.ru</li>
                    <li>📍 Москва, ул. Пушкина, д. 42</li>
                    <li>🕒 Пн-Пт: 9:00 - 21:00</li>
                </ul>
                
                <h4 style="margin-top: 2rem;">Мы в соцсетях:</h4>
                <div class="social-links">
                    <a href="#" class="social-link">VK</a>
                    <a href="#" class="social-link">TG</a>
                    <a href="#" class="social-link">YT</a>
                    <a href="#" class="social-link">Git</a>
                </div>
            </div>
            
        </div>
    </div>
</section>

<?php get_footer();