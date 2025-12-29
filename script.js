(function() {
    'use strict';

    window.__app = window.__app || {};

    const STATE = {
        menuOpen: false,
        formSubmitting: false,
        observers: new Map()
    };

    function debounce(func, wait) {
        let timeout;
        return function() {
            const context = this;
            const args = arguments;
            clearTimeout(timeout);
            timeout = setTimeout(() => func.apply(context, args), wait);
        };
    }

    function throttle(func, limit) {
        let inThrottle;
        return function() {
            const args = arguments;
            const context = this;
            if (!inThrottle) {
                func.apply(context, args);
                inThrottle = true;
                setTimeout(() => { inThrottle = false; }, limit);
            }
        };
    }

    class BurgerMenuModule {
        constructor() {
            if (window.__app.burgerInitialized) return;
            window.__app.burgerInitialized = true;

            this.nav = document.querySelector('.navbar');
            this.toggle = document.querySelector('.navbar-toggle');
            this.navList = document.querySelector('.navbar-nav');
            this.navLinks = document.querySelectorAll('.nav-link');
            this.body = document.body;

            if (!this.nav || !this.toggle || !this.navList) return;

            this.init();
        }

        init() {
            this.createStyles();
            this.bindEvents();
        }

        createStyles() {
            if (document.getElementById('burger-menu-styles')) return;

            const style = document.createElement('style');
            style.id = 'burger-menu-styles';
            style.textContent = `
                .navbar-nav {
                    transition: opacity 0.3s ease-in-out, visibility 0.3s ease-in-out;
                }

                @media (max-width: 767px) {
                    .navbar-nav {
                        height: calc(100vh - var(--nav-h));
                        opacity: 0;
                        visibility: hidden;
                    }

                    .navbar-nav.show {
                        opacity: 1;
                        visibility: visible;
                    }

                    body.u-no-scroll {
                        overflow: hidden;
                        position: fixed;
                        width: 100%;
                    }
                }

                .navbar-toggle span {
                    transition: transform 0.3s ease-in-out, opacity 0.3s ease-in-out;
                }

                .nav-link {
                    transition: all 0.3s ease-in-out;
                }
            `;
            document.head.appendChild(style);
        }

        openMenu() {
            STATE.menuOpen = true;
            this.navList.classList.add('show');
            this.toggle.classList.add('active');
            this.toggle.setAttribute('aria-expanded', 'true');
            this.body.classList.add('u-no-scroll');
        }

        closeMenu() {
            STATE.menuOpen = false;
            this.navList.classList.remove('show');
            this.toggle.classList.remove('active');
            this.toggle.setAttribute('aria-expanded', 'false');
            this.body.classList.remove('u-no-scroll');
        }

        bindEvents() {
            this.toggle.addEventListener('click', (e) => {
                e.preventDefault();
                STATE.menuOpen ? this.closeMenu() : this.openMenu();
            });

            document.addEventListener('keydown', (e) => {
                if (e.key === 'Escape' && STATE.menuOpen) {
                    this.closeMenu();
                    this.toggle.focus();
                }
            });

            document.addEventListener('click', (e) => {
                if (STATE.menuOpen && !this.nav.contains(e.target)) {
                    this.closeMenu();
                }
            });

            this.navLinks.forEach(link => {
                link.addEventListener('click', () => {
                    if (STATE.menuOpen) this.closeMenu();
                });
            });

            window.addEventListener('resize', debounce(() => {
                if (window.innerWidth >= 768 && STATE.menuOpen) {
                    this.closeMenu();
                }
            }, 250));
        }
    }

    class SmoothScrollModule {
        constructor() {
            if (window.__app.smoothScrollInitialized) return;
            window.__app.smoothScrollInitialized = true;

            this.isHomepage = window.location.pathname === '/' || 
                            window.location.pathname.endsWith('/index.html');
            this.init();
        }

        init() {
            if (!this.isHomepage) {
                this.convertLinks();
            }

            document.addEventListener('click', (e) => {
                const link = e.target.closest('a[href^="#"]');
                if (!link) return;

                const href = link.getAttribute('href');
                if (href === '#' || href === '#!') return;

                if (this.isHomepage) {
                    e.preventDefault();
                    this.scrollToSection(href.substring(1));
                }
            });
        }

        convertLinks() {
            const sectionLinks = document.querySelectorAll('a[href^="#"]');
            sectionLinks.forEach(link => {
                const href = link.getAttribute('href');
                if (href !== '#' && href !== '#!') {
                    link.setAttribute('href', '/' + href);
                }
            });
        }

        scrollToSection(targetId) {
            const target = document.getElementById(targetId);
            if (!target) return;

            const header = document.querySelector('.l-header, .navbar');
            const headerHeight = header ? header.offsetHeight : 80;
            const targetPosition = target.offsetTop - headerHeight;

            window.scrollTo({
                top: targetPosition,
                behavior: 'smooth'
            });
        }
    }

    class ScrollSpyModule {
        constructor() {
            if (window.__app.scrollSpyInitialized) return;
            window.__app.scrollSpyInitialized = true;

            this.navLinks = document.querySelectorAll('.nav-link[href^="#"]');
            this.sections = [];
            
            this.init();
        }

        init() {
            this.navLinks.forEach(link => {
                const href = link.getAttribute('href');
                if (href !== '#' && href !== '#!') {
                    const section = document.querySelector(href);
                    if (section) {
                        this.sections.push({ link, section });
                    }
                }
            });

            if (this.sections.length > 0) {
                window.addEventListener('scroll', throttle(() => this.updateActive(), 100));
                this.updateActive();
            }
        }

        updateActive() {
            const scrollPosition = window.scrollY + 100;

            this.sections.forEach(({ link, section }) => {
                const sectionTop = section.offsetTop;
                const sectionHeight = section.offsetHeight;

                if (scrollPosition >= sectionTop && scrollPosition < sectionTop + sectionHeight) {
                    this.navLinks.forEach(l => {
                        l.classList.remove('active');
                        l.removeAttribute('aria-current');
                    });
                    link.classList.add('active');
                    link.setAttribute('aria-current', 'page');
                }
            });
        }
    }

    class FormValidationModule {
        constructor() {
            if (window.__app.formsInitialized) return;
            window.__app.formsInitialized = true;

            this.forms = document.querySelectorAll('form, .c-form');
            this.init();
        }

        init() {
            this.createNotificationContainer();
            this.setupValidation();
        }

        createNotificationContainer() {
            if (document.getElementById('notification-container')) return;

            const container = document.createElement('div');
            container.id = 'notification-container';
            container.style.cssText = 'position:fixed;top:20px;right:20px;z-index:9999;max-width:400px;';
            document.body.appendChild(container);
        }

        showNotification(message, type = 'success') {
            const container = document.getElementById('notification-container');
            const notification = document.createElement('div');
            notification.className = `alert alert-${type}`;
            notification.style.cssText = 'padding:1rem;margin-bottom:1rem;border-radius:0.5rem;box-shadow:0 4px 6px rgba(0,0,0,0.1);animation:slideIn 0.3s ease-in-out;';
            notification.textContent = message;

            const style = document.createElement('style');
            style.textContent = '@keyframes slideIn{from{transform:translateX(100%);opacity:0;}to{transform:translateX(0);opacity:1;}}';
            if (!document.getElementById('notification-animation')) {
                style.id = 'notification-animation';
                document.head.appendChild(style);
            }

            container.appendChild(notification);

            setTimeout(() => {
                notification.style.animation = 'slideOut 0.3s ease-in-out';
                notification.style.opacity = '0';
                notification.style.transform = 'translateX(100%)';
                setTimeout(() => notification.remove(), 300);
            }, 5000);
        }

        validateField(field) {
            const value = field.value.trim();
            const type = field.type;
            const name = field.name || field.id;
            let isValid = true;
            let errorMessage = '';

            if (field.hasAttribute('required') && !value) {
                isValid = false;
                errorMessage = 'Dieses Feld ist erforderlich.';
            } else if (type === 'email' || name.toLowerCase().includes('email')) {
                const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
                if (value && !emailRegex.test(value)) {
                    isValid = false;
                    errorMessage = 'Bitte geben Sie eine gültige E-Mail-Adresse ein.';
                }
            } else if (type === 'tel' || name.toLowerCase().includes('phone') || name.toLowerCase().includes('tel')) {
                const phoneRegex = /^[\+\d\s\(\)\-]{10,20}$/;
                if (value && !phoneRegex.test(value)) {
                    isValid = false;
                    errorMessage = 'Bitte geben Sie eine gültige Telefonnummer ein.';
                }
            } else if (field.tagName === 'TEXTAREA' || name.toLowerCase().includes('message')) {
                if (value && value.length < 10) {
                    isValid = false;
                    errorMessage = 'Die Nachricht muss mindestens 10 Zeichen lang sein.';
                }
            } else if (name.toLowerCase().includes('name')) {
                const nameRegex = /^[a-zA-ZÀ-ÿ\s\-']{2,50}$/;
                if (value && !nameRegex.test(value)) {
                    isValid = false;
                    errorMessage = 'Bitte geben Sie einen gültigen Namen ein (2-50 Zeichen).';
                }
            }

            this.updateFieldState(field, isValid, errorMessage);
            return isValid;
        }

        updateFieldState(field, isValid, errorMessage) {
            const existingError = field.parentElement.querySelector('.invalid-feedback');
            
            if (isValid) {
                field.classList.remove('is-invalid');
                field.classList.add('is-valid');
                if (existingError) existingError.remove();
            } else {
                field.classList.remove('is-valid');
                field.classList.add('is-invalid');
                
                if (!existingError) {
                    const errorDiv = document.createElement('div');
                    errorDiv.className = 'invalid-feedback';
                    errorDiv.style.display = 'block';
                    errorDiv.textContent = errorMessage;
                    field.parentElement.appendChild(errorDiv);
                } else {
                    existingError.textContent = errorMessage;
                }
            }
        }

        setupValidation() {
            this.forms.forEach(form => {
                const fields = form.querySelectorAll('input, textarea, select');
                
                fields.forEach(field => {
                    field.addEventListener('blur', () => {
                        if (field.value.trim()) {
                            this.validateField(field);
                        }
                    });

                    field.addEventListener('input', debounce(() => {
                        if (field.classList.contains('is-invalid')) {
                            this.validateField(field);
                        }
                    }, 500));
                });

                form.addEventListener('submit', (e) => {
                    e.preventDefault();
                    this.handleSubmit(form, fields);
                });
            });
        }

        handleSubmit(form, fields) {
            if (STATE.formSubmitting) return;

            let isValid = true;
            fields.forEach(field => {
                if (!this.validateField(field)) {
                    isValid = false;
                }
            });

            if (!isValid) {
                this.showNotification('Bitte korrigieren Sie die Fehler im Formular.', 'danger');
                return;
            }

            const submitBtn = form.querySelector('button[type="submit"]');
            const originalText = submitBtn ? submitBtn.innerHTML : '';

            if (submitBtn) {
                STATE.formSubmitting = true;
                submitBtn.disabled = true;
                submitBtn.innerHTML = '<span class="spinner-border spinner-border-sm me-2"></span>Wird gesendet...';
            }

            setTimeout(() => {
                this.showNotification('Nachricht erfolgreich gesendet!', 'success');
                
                setTimeout(() => {
                    window.location.href = 'thank_you.html';
                }, 1500);

                if (submitBtn) {
                    submitBtn.disabled = false;
                    submitBtn.innerHTML = originalText;
                    STATE.formSubmitting = false;
                }
            }, 1500);
        }
    }

    class AnimationsModule {
        constructor() {
            if (window.__app.animationsInitialized) return;
            window.__app.animationsInitialized = true;

            this.init();
        }

        init() {
            this.setupIntersectionObserver();
            this.setupButtonAnimations();
            this.setupCardAnimations();
            this.setupImageAnimations();
            this.setupScrollToTop();
        }

        setupIntersectionObserver() {
            const elements = document.querySelectorAll('.card, .c-card, .tourism-card, .destination-card, h2, h3, p, img');

            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.style.opacity = '1';
                        entry.target.style.transform = 'translateY(0)';
                    }
                });
            }, {
                threshold: 0.1,
                rootMargin: '0px 0px -50px 0px'
            });

            elements.forEach((el, index) => {
                el.style.opacity = '0';
                el.style.transform = 'translateY(30px)';
                el.style.transition = `all 0.6s ease-out ${index * 0.05}s`;
                observer.observe(el);
            });

            STATE.observers.set('main', observer);
        }

        setupButtonAnimations() {
            const buttons = document.querySelectorAll('.c-button, .btn, button[type="submit"]');

            buttons.forEach(button => {
                button.addEventListener('mouseenter', function() {
                    this.style.transition = 'all 0.3s ease-in-out';
                });

                button.addEventListener('click', function(e) {
                    const ripple = document.createElement('span');
                    const rect = this.getBoundingClientRect();
                    const size = Math.max(rect.width, rect.height);
                    const x = e.clientX - rect.left - size / 2;
                    const y = e.clientY - rect.top - size / 2;

                    ripple.style.cssText = `
                        position: absolute;
                        width: ${size}px;
                        height: ${size}px;
                        border-radius: 50%;
                        background: rgba(255, 255, 255, 0.5);
                        left: ${x}px;
                        top: ${y}px;
                        transform: scale(0);
                        animation: ripple 0.6s ease-out;
                        pointer-events: none;
                    `;

                    const style = document.createElement('style');
                    if (!document.getElementById('ripple-animation')) {
                        style.id = 'ripple-animation';
                        style.textContent = '@keyframes ripple{to{transform:scale(2);opacity:0;}}';
                        document.head.appendChild(style);
                    }

                    this.style.position = 'relative';
                    this.style.overflow = 'hidden';
                    this.appendChild(ripple);

                    setTimeout(() => ripple.remove(), 600);
                });
            });
        }

        setupCardAnimations() {
            const cards = document.querySelectorAll('.card, .c-card, .tourism-card, .destination-card');

            cards.forEach(card => {
                card.addEventListener('mouseenter', function() {
                    this.style.transition = 'all 0.4s cubic-bezier(0.4, 0, 0.2, 1)';
                });

                card.addEventListener('mouseleave', function() {
                    this.style.transition = 'all 0.4s cubic-bezier(0.4, 0, 0.2, 1)';
                });
            });
        }

        setupImageAnimations() {
            const images = document.querySelectorAll('img');

            images.forEach(img => {
                if (!img.hasAttribute('loading')) {
                    img.setAttribute('loading', 'lazy');
                }

                img.addEventListener('load', function() {
                    this.style.animation = 'fadeIn 0.6s ease-in-out';
                });

                img.addEventListener('error', function() {
                    this.style.opacity = '0.5';
                    this.style.filter = 'grayscale(100%)';
                });
            });

            const style = document.createElement('style');
            if (!document.getElementById('image-animations')) {
                style.id = 'image-animations';
                style.textContent = '@keyframes fadeIn{from{opacity:0;}to{opacity:1;}}';
                document.head.appendChild(style);
            }
        }

        setupScrollToTop() {
            const scrollBtn = document.createElement('button');
            scrollBtn.innerHTML = '↑';
            scrollBtn.style.cssText = `
                position: fixed;
                bottom: 30px;
                right: 30px;
                width: 50px;
                height: 50px;
                border-radius: 50%;
                background: linear-gradient(135deg, var(--color-primary), var(--color-primary-light));
                color: white;
                border: none;
                font-size: 24px;
                cursor: pointer;
                opacity: 0;
                visibility: hidden;
                transition: all 0.3s ease-in-out;
                z-index: 1000;
                box-shadow: var(--shadow-lg);
            `;
            scrollBtn.setAttribute('aria-label', 'Nach oben scrollen');

            document.body.appendChild(scrollBtn);

            window.addEventListener('scroll', throttle(() => {
                if (window.scrollY > 300) {
                    scrollBtn.style.opacity = '1';
                    scrollBtn.style.visibility = 'visible';
                } else {
                    scrollBtn.style.opacity = '0';
                    scrollBtn.style.visibility = 'hidden';
                }
            }, 100));

            scrollBtn.addEventListener('click', () => {
                window.scrollTo({
                    top: 0,
                    behavior: 'smooth'
                });
            });

            scrollBtn.addEventListener('mouseenter', function() {
                this.style.transform = 'translateY(-5px) scale(1.1)';
            });

            scrollBtn.addEventListener('mouseleave', function() {
                this.style.transform = 'translateY(0) scale(1)';
            });
        }
    }

    class CountUpModule {
        constructor() {
            if (window.__app.countUpInitialized) return;
            window.__app.countUpInitialized = true;

            this.numbers = document.querySelectorAll('[data-countup]');
            this.init();
        }

        init() {
            if (this.numbers.length === 0) return;

            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting && !entry.target.dataset.counted) {
                        this.animateCount(entry.target);
                        entry.target.dataset.counted = 'true';
                    }
                });
            }, { threshold: 0.5 });

            this.numbers.forEach(num => observer.observe(num));
        }

        animateCount(element) {
            const target = parseInt(element.dataset.countup) || parseInt(element.textContent);
            const duration = 2000;
            const start = 0;
            const increment = target / (duration / 16);
            let current = start;

            const timer = setInterval(() => {
                current += increment;
                if (current >= target) {
                    element.textContent = target;
                    clearInterval(timer);
                } else {
                    element.textContent = Math.floor(current);
                }
            }, 16);
        }
    }

    class MicroInteractionsModule {
        constructor() {
            if (window.__app.microInteractionsInitialized) return;
            window.__app.microInteractionsInitialized = true;

            this.init();
        }

        init() {
            this.setupLinkHoverEffects();
            this.setupInputFocusEffects();
        }

        setupLinkHoverEffects() {
            const links = document.querySelectorAll('a:not(.c-button):not(.btn)');

            links.forEach(link => {
                link.addEventListener('mouseenter', function() {
                    this.style.transition = 'all 0.2s ease-in-out';
                });
            });
        }

        setupInputFocusEffects() {
            const inputs = document.querySelectorAll('input, textarea, select');

            inputs.forEach(input => {
                input.addEventListener('focus', function() {
                    this.style.transition = 'all 0.3s ease-in-out';
                });

                input.addEventListener('blur', function() {
                    this.style.transition = 'all 0.3s ease-in-out';
                });
            });
        }
    }

    window.__app.init = function() {
        new BurgerMenuModule();
        new SmoothScrollModule();
        new ScrollSpyModule();
        new FormValidationModule();
        new AnimationsModule();
        new CountUpModule();
        new MicroInteractionsModule();
    };

    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', window.__app.init);
    } else {
        window.__app.init();
    }

})();