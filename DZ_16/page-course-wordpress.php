<?php
/**
 * Template Name: Курс WordPress
 */

get_header();
?>

<style>
:root {
    --primary-color: #2c3e50;
    --secondary-color: #3498db;
    --accent-color: #e74c3c;
    --light-color: #ecf0f1;
    --dark-color: #34495e;
}

.course-hero {
    background: linear-gradient(135deg, var(--primary-color), var(--dark-color));
    color: white;
    padding: 100px 0;
    text-align: center;
}

.course-title {
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    font-size: 3.5rem;
    font-weight: 700;
    margin-bottom: 1rem;
}

.course-subtitle {
    font-size: 1.5rem;
    font-weight: 300;
    margin-bottom: 2rem;
    opacity: 0.9;
}

.cta-button {
    background: var(--accent-color);
    color: white;
    padding: 15px 40px;
    border-radius: 50px;
    text-decoration: none;
    font-weight: 600;
    font-size: 1.1rem;
    transition: all 0.3s ease;
    display: inline-block;
}

.cta-button:hover {
    background: #c0392b;
    transform: translateY(-2px);
    color: white;
}

.section {
    padding: 80px 0;
}

.section-title {
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    color: var(--primary-color);
    font-size: 2.5rem;
    text-align: center;
    margin-bottom: 3rem;
    font-weight: 600;
}

.about-course {
    background: var(--light-color);
}

.feature-card {
    background: white;
    padding: 30px;
    border-radius: 10px;
    box-shadow: 0 5px 15px rgba(0,0,0,0.1);
    text-align: center;
    margin-bottom: 30px;
    transition: transform 0.3s ease;
}

.feature-card:hover {
    transform: translateY(-5px);
}

.feature-icon {
    font-size: 3rem;
    color: var(--secondary-color);
    margin-bottom: 1rem;
}

.curriculum-item {
    background: white;
    border-left: 4px solid var(--secondary-color);
    padding: 25px;
    margin-bottom: 20px;
    box-shadow: 0 2px 10px rgba(0,0,0,0.1);
}

.module-number {
    background: var(--secondary-color);
    color: white;
    width: 40px;
    height: 40px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-weight: bold;
    margin-right: 15px;
}

.teacher-card {
    text-align: center;
    padding: 30px;
}

.teacher-photo {
    width: 200px;
    height: 200px;
    border-radius: 50%;
    object-fit: cover;
    margin: 0 auto 20px;
    border: 5px solid var(--light-color);
}

.contact-info {
    background: var(--primary-color);
    color: white;
    padding: 50px 0;
}

.contact-item {
    text-align: center;
    margin-bottom: 30px;
}

.contact-icon {
    font-size: 2rem;
    margin-bottom: 1rem;
    color: var(--secondary-color);
}

.benefits-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 30px;
    margin-top: 50px;
}
</style>

<section class="course-hero">
    <div class="container">
        <h1 class="course-title">WordPress Мастер</h1>
        <p class="course-subtitle">От Новичка до Профи за 8 недель</p>
        <p style="font-size: 1.2rem; margin-bottom: 2rem; max-width: 600px; margin-left: auto; margin-right: auto;">
            Освойте профессиональную разработку на WordPress. Создавайте сайты любой сложности, 
            разрабатывайте собственные темы и плагины, зарабатывайте на своих навыках.
        </p>
        <a href="#contact" class="cta-button">Записаться на курс</a>
    </div>
</section>

<section id="about" class="section about-course">
    <div class="container">
        <h2 class="section-title">О Курсе</h2>
        <div class="row">
            <div class="col-md-6">
                <p style="font-size: 1.1rem; line-height: 1.8;">
                    <strong>WordPress Мастер</strong> — это интенсивный практический курс, разработанный 
                    для тех, кто хочет не просто использовать WordPress, а понимать его архитектуру 
                    и создавать профессиональные решения.
                </p>
                <p style="font-size: 1.1rem; line-height: 1.8;">
                    За 8 недель вы пройдете путь от базовой установки WordPress до создания 
                    сложных тем и плагинов. Каждое занятие включает теорию и практику, 
                    домашние задания и разбор реальных кейсов.
                </p>
            </div>
            <div class="col-md-6">
                <div class="row">
                    <div class="col-6">
                        <div class="feature-card">
                            <div class="feature-icon">⏱️</div>
                            <h4>8 недель</h4>
                            <p>Интенсивного обучения</p>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="feature-card">
                            <div class="feature-icon">🎯</div>
                            <h4>Практика</h4>
                            <p>Реальные проекты</p>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="feature-card">
                            <div class="feature-icon">👨‍🏫</div>
                            <h4>Поддержка</h4>
                            <p>Обратная связь</p>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="feature-card">
                            <div class="feature-icon">📚</div>
                            <h4>Материалы</h4>
                            <p>Пожизненный доступ</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="curriculum" class="section">
    <div class="container">
        <h2 class="section-title">Программа Курса</h2>
        
        <div class="curriculum-item">
            <div class="d-flex align-items-center mb-3">
                <div class="module-number">1</div>
                <h4 style="margin: 0; color: var(--primary-color);">Основы WordPress</h4>
            </div>
            <ul>
                <li>Установка и настройка WordPress</li>
                <li>Архитектура и принципы работы CMS</li>
                <li>Работа с административной панелью</li>
                <li>Создание и управление контентом</li>
            </ul>
        </div>

        <div class="curriculum-item">
            <div class="d-flex align-items-center mb-3">
                <div class="module-number">2</div>
                <h4 style="margin: 0; color: var(--primary-color);">Темы и Шаблоны</h4>
            </div>
            <ul>
                <li>Структура WordPress тем</li>
                <li>Создание собственной темы с нуля</li>
                <li>Template Hierarchy</li>
                <li>Responsive дизайн</li>
            </ul>
        </div>

        <div class="curriculum-item">
            <div class="d-flex align-items-center mb-3">
                <div class="module-number">3</div>
                <h4 style="margin: 0; color: var(--primary-color);">Плагины и Функционал</h4>
            </div>
            <ul>
                <li>Разработка собственных плагинов</li>
                <li>Hooks: Actions и Filters</li>
                <li>Custom Post Types и Taxonomies</li>
                <li>REST API</li>
            </ul>
        </div>

        <div class="curriculum-item">
            <div class="d-flex align-items-center mb-3">
                <div class="module-number">4</div>
                <h4 style="margin: 0; color: var(--primary-color);">Продвинутые Техники</h4>
            </div>
            <ul>
                <li>Оптимизация производительности</li>
                <li>Безопасность WordPress</li>
                <li>Интеграция с внешними сервисами</li>
                <li>Gutenberg блоки</li>
            </ul>
        </div>
    </div>
</section>

<section id="teachers" class="section" style="background: var(--light-color);">
    <div class="container">
        <h2 class="section-title">Преподаватели</h2>
        <div class="row">
            <div class="col-md-6">
                <div class="teacher-card">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/teacher1.jpg" 
                         alt="Алексей Петров" 
                         class="teacher-photo"
                         onerror="this.style.display='none'">
                    <h3>Алексей Петров</h3>
                    <p style="color: var(--secondary-color); font-weight: 600;">Senior WordPress Developer</p>
                    <p>8+ лет опыта в WordPress разработке. Создал более 100 тем и плагинов. 
                       Специализируется на сложных кастомизациях и оптимизации.</p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="teacher-card">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/teacher2.jpg" 
                         alt="Мария Иванова" 
                         class="teacher-photo"
                         onerror="this.style.display='none'">
                    <h3>Мария Иванова</h3>
                    <p style="color: var(--secondary-color); font-weight: 600;">WordPress Designer & Developer</p>
                    <p>Эксперт в области UX/UI дизайна для WordPress. Сочетает технические навыки 
                       разработки с пониманием пользовательского опыта.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section">
    <div class="container">
        <h2 class="section-title">Что Вы Получите</h2>
        <div class="benefits-grid">
            <div class="feature-card">
                <div class="feature-icon">💼</div>
                <h4>Портфолио</h4>
                <p>3 готовых проекта для портфолио</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon">🛠️</div>
                <h4>Навыки</h4>
                <p>Практические навыки разработки</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon">📱</div>
                <h4>Поддержка</h4>
                <p>Доступ к закрытому чату</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon">🏆</div>
                <h4>Сертификат</h4>
                <p>Официальный сертификат об окончании</p>
            </div>
        </div>
    </div>
</section>

<section id="contact" class="contact-info">
    <div class="container">
        <h2 class="section-title" style="color: white;">Записаться на Курс</h2>
        <div class="row">
            <div class="col-md-4">
                <div class="contact-item">
                    <div class="contact-icon">📧</div>
                    <h4>Email</h4>
                    <p>info@wordpress-master.ru</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="contact-item">
                    <div class="contact-icon">📞</div>
                    <h4>Телефон</h4>
                    <p>+7 (999) 123-45-67</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="contact-item">
                    <div class="contact-icon">🕒</div>
                    <h4>Время работы</h4>
                    <p>Пн-Пт: 9:00 - 18:00</p>
                </div>
            </div>
        </div>
        
        <div style="max-width: 600px; margin: 50px auto 0;">
            <form id="course-form" style="background: white; padding: 30px; border-radius: 10px;">
                <h4 style="text-align: center; color: var(--primary-color); margin-bottom: 30px;">
                    Оставьте заявку
                </h4>
                <div class="mb-3">
                    <input type="text" class="form-control" placeholder="Ваше имя" required>
                </div>
                <div class="mb-3">
                    <input type="email" class="form-control" placeholder="Email" required>
                </div>
                <div class="mb-3">
                    <input type="tel" class="form-control" placeholder="Телефон">
                </div>
                <div class="mb-3">
                    <textarea class="form-control" rows="3" placeholder="Ваш опыт с WordPress (если есть)"></textarea>
                </div>
                <button type="submit" class="cta-button" style="width: 100%; background: var(--accent-color); border: none;">
                    Отправить заявку
                </button>
            </form>
        </div>
    </div>
</section>

<script>
document.getElementById('course-form').addEventListener('submit', function(e) {
    e.preventDefault();
    alert('Спасибо за заявку! Мы свяжемся с вами в ближайшее время.');
    this.reset();
});
</script>

<?php get_footer(); ?>