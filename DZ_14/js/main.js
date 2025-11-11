
document.addEventListener('DOMContentLoaded', function() {

    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                target.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            }
        });
    });

    const tabHeaders = document.querySelectorAll('.tab-header');
    
    tabHeaders.forEach(header => {
        header.addEventListener('click', () => {
            const tab = header.parentElement;
            const content = tab.querySelector('.tab-content');
            const icon = header.querySelector('.tab-icon');
            
            document.querySelectorAll('.tab-content').forEach(item => {
                if (item !== content) {
                    item.classList.remove('active');
                }
            });
            
            document.querySelectorAll('.tab-icon').forEach(item => {
                if (item !== icon) {
                    item.textContent = '+';
                }
            });
            
            content.classList.toggle('active');
            icon.textContent = content.classList.contains('active') ? '−' : '+';
        });
    });

    const registrationForm = document.getElementById('course-registration');
    if (registrationForm) {
        registrationForm.addEventListener('submit', function(e) {
            e.preventDefault();
            
            const formData = new FormData(this);
            console.log('Данные формы:', Object.fromEntries(formData));
            
            alert('Заявка отправлена! Мы свяжемся с вами в ближайшее время.');
            this.reset();
        });
    }

    const observerOptions = {
        threshold: 0.1,
        rootMargin: '0px 0px -50px 0px'
    };

    const observer = new IntersectionObserver(function(entries) {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.style.opacity = '1';
                entry.target.style.transform = 'translateY(0)';
            }
        });
    }, observerOptions);

    document.querySelectorAll('.section').forEach(section => {
        section.style.opacity = '0';
        section.style.transform = 'translateY(30px)';
        section.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
        observer.observe(section);
    });
});