/**
 * JavaScript principale per Pizzeria Egidio
 */

(function($) {
    'use strict';

    // Document ready
    $(document).ready(function() {
        initMobileMenu();
        initScrollEffects();
        initSmoothScrolling();
        initAnimations();
        initContactForm();
    });

    /**
     * Inizializza il menu mobile
     */
    function initMobileMenu() {
        const $mobileToggle = $('#mobile-menu-toggle');
        const $mainNav = $('#main-nav');
        
        $mobileToggle.on('click', function() {
            $mainNav.toggleClass('active');
            const $icon = $(this).find('i');
            
            if ($mainNav.hasClass('active')) {
                $icon.removeClass('fa-bars').addClass('fa-times');
            } else {
                $icon.removeClass('fa-times').addClass('fa-bars');
            }
        });

        // Chiudi menu quando si clicca su un link
        $mainNav.find('a').on('click', function() {
            if ($(window).width() <= 768) {
                $mainNav.removeClass('active');
                $mobileToggle.find('i').removeClass('fa-times').addClass('fa-bars');
            }
        });

        // Chiudi menu quando si ridimensiona la finestra
        $(window).on('resize', function() {
            if ($(window).width() > 768) {
                $mainNav.removeClass('active');
                $mobileToggle.find('i').removeClass('fa-times').addClass('fa-bars');
            }
        });
    }

    /**
     * Effetti di scroll per header
     */
    function initScrollEffects() {
        const $header = $('#site-header');
        
        $(window).on('scroll', function() {
            const scrollTop = $(this).scrollTop();
            
            if (scrollTop > 100) {
                $header.css({
                    'background': 'rgba(255, 255, 255, 0.98)',
                    'box-shadow': '0 2px 20px rgba(0,0,0,0.1)'
                });
            } else {
                $header.css({
                    'background': 'rgba(255, 255, 255, 0.95)',
                    'box-shadow': '0 2px 4px rgba(0,0,0,0.1)'
                });
            }
        });
    }

    /**
     * Smooth scrolling per i link anchor
     */
    function initSmoothScrolling() {
        $('a[href^="#"]').on('click', function(e) {
            const target = $($(this).attr('href'));
            
            if (target.length) {
                e.preventDefault();
                
                $('html, body').animate({
                    scrollTop: target.offset().top - 80
                }, 800, 'easeInOutQuart');
            }
        });
    }

    /**
     * Animazioni scroll-triggered
     */
    function initAnimations() {
        // Intersection Observer per le animazioni
        if ('IntersectionObserver' in window) {
            const observer = new IntersectionObserver(function(entries) {
                entries.forEach(function(entry) {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('fade-in-up');
                        observer.unobserve(entry.target);
                    }
                });
            }, {
                threshold: 0.1,
                rootMargin: '0px 0px -50px 0px'
            });

            // Osserva tutti gli elementi con classe 'fade-in-up'
            document.querySelectorAll('.section, .card, .pizza-special, .menu-category').forEach(function(el) {
                observer.observe(el);
            });
        }
    }

    /**
     * Gestione form di contatto (se presente)
     */
    function initContactForm() {
        const $contactForm = $('#contact-form');
        
        if ($contactForm.length) {
            $contactForm.on('submit', function(e) {
                e.preventDefault();
                
                // Validazione base
                const $requiredFields = $contactForm.find('[required]');
                let isValid = true;
                
                $requiredFields.each(function() {
                    const $field = $(this);
                    if (!$field.val().trim()) {
                        isValid = false;
                        $field.addClass('error');
                    } else {
                        $field.removeClass('error');
                    }
                });
                
                if (isValid) {
                    // Qui puoi aggiungere l'invio AJAX del form
                    showNotification('Messaggio inviato con successo!', 'success');
                } else {
                    showNotification('Compila tutti i campi obbligatori', 'error');
                }
            });
        }
    }

    /**
     * Mostra notificazioni
     */
    function showNotification(message, type) {
        const $notification = $('<div class="notification notification-' + type + '">' + message + '</div>');
        
        $('body').append($notification);
        
        setTimeout(function() {
            $notification.addClass('show');
        }, 100);
        
        setTimeout(function() {
            $notification.removeClass('show');
            setTimeout(function() {
                $notification.remove();
            }, 300);
        }, 3000);
    }

    /**
     * Utility: Lazy loading per le immagini
     */
    function initLazyLoading() {
        if ('IntersectionObserver' in window) {
            const imageObserver = new IntersectionObserver(function(entries, observer) {
                entries.forEach(function(entry) {
                    if (entry.isIntersecting) {
                        const img = entry.target;
                        img.src = img.dataset.src;
                        img.classList.remove('lazy');
                        imageObserver.unobserve(img);
                    }
                });
            });

            document.querySelectorAll('img[data-src]').forEach(function(img) {
                imageObserver.observe(img);
            });
        }
    }

    /**
     * Inizializza i tooltip (se necessario)
     */
    function initTooltips() {
        $('[data-tooltip]').each(function() {
            const $element = $(this);
            const tooltipText = $element.data('tooltip');
            
            $element.on('mouseenter', function() {
                const $tooltip = $('<div class="tooltip">' + tooltipText + '</div>');
                $('body').append($tooltip);
                
                const offset = $element.offset();
                $tooltip.css({
                    top: offset.top - $tooltip.outerHeight() - 10,
                    left: offset.left + ($element.outerWidth() / 2) - ($tooltip.outerWidth() / 2)
                }).addClass('show');
            });
            
            $element.on('mouseleave', function() {
                $('.tooltip').remove();
            });
        });
    }

    /**
     * Gestione delle recensioni/testimonial (se presenti)
     */
    function initTestimonials() {
        const $testimonials = $('.testimonial-slider');
        
        if ($testimonials.length) {
            $testimonials.each(function() {
                let currentSlide = 0;
                const $slides = $(this).find('.testimonial-slide');
                const totalSlides = $slides.length;
                
                function showSlide(index) {
                    $slides.removeClass('active');
                    $slides.eq(index).addClass('active');
                }
                
                function nextSlide() {
                    currentSlide = (currentSlide + 1) % totalSlides;
                    showSlide(currentSlide);
                }
                
                // Auto-advance ogni 5 secondi
                setInterval(nextSlide, 5000);
                
                // Inizializza il primo slide
                showSlide(0);
            });
        }
    }

    // Inizializza funzionalità aggiuntive
    $(window).on('load', function() {
        initLazyLoading();
        initTooltips();
        initTestimonials();
    });

})(jQuery);

// CSS per le notificazioni (da aggiungere al CSS principale se necessario)
const notificationCSS = `
.notification {
    position: fixed;
    top: 20px;
    right: 20px;
    padding: 1rem 1.5rem;
    border-radius: 8px;
    color: white;
    font-weight: 500;
    z-index: 9999;
    transform: translateX(100%);
    transition: transform 0.3s ease;
}

.notification.show {
    transform: translateX(0);
}

.notification-success {
    background: #27ae60;
}

.notification-error {
    background: #e74c3c;
}

.notification-info {
    background: #3498db;
}

.tooltip {
    position: absolute;
    background: rgba(0,0,0,0.8);
    color: white;
    padding: 0.5rem;
    border-radius: 4px;
    font-size: 0.9rem;
    z-index: 1000;
    opacity: 0;
    transition: opacity 0.3s ease;
}

.tooltip.show {
    opacity: 1;
}

.tooltip::after {
    content: '';
    position: absolute;
    top: 100%;
    left: 50%;
    margin-left: -5px;
    border-width: 5px;
    border-style: solid;
    border-color: rgba(0,0,0,0.8) transparent transparent transparent;
}
`;