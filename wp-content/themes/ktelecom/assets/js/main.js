//Скрипт слайдера
jQuery(document).ready(function($) {
    var $slider = $('.tariffs__slider');

    function initSlider() {
        var windowWidth = $(window).width();
        var items = 1;

        if (windowWidth >= 600 && windowWidth < 1000) {
            items = 2;
        } else if (windowWidth >= 1000) {
            items = 3;
        }

        // Проверяем инициализирован ли уже слайдер
        if ($slider.hasClass('owl-loaded')) {
            $slider.trigger('destroy.owl.carousel');
        }

        $slider.owlCarousel({
            loop: true,
            margin: 10,
            nav: true,
            autoplay: true,
            autoplayTimeout: 5000,
            autoplayHoverPause: true,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 2
                },
                1000: {
                    items: 3
                }
            }
        });
    }

    initSlider();

    var resizeTimer;
    $(window).resize(function() {
        clearTimeout(resizeTimer);
        resizeTimer = setTimeout(function() {
            initSlider();
        }, 250);
    });
});
//Просто апострофы
document.addEventListener("DOMContentLoaded", function() {
    const description = document.getElementById('tariffs-description');
    if (description) {
        const sentences = description.innerHTML.split('<br>');

        description.innerHTML = sentences.map(sentence => `• ${sentence}`).join('<br>');
    }
});


