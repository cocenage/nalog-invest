document.addEventListener('livewire:navigated', function () {
    // Инициализация Swiper
    const swiperElements = document.querySelectorAll('.swiper');

    if (swiperElements.length) {
        swiperElements.forEach(el => {
            new Swiper(el, {
                direction: 'horizontal',
                loop: false,
                initialSlide: 1,
                spaceBetween: 10,
                slidesPerView: 1,
                centeredSlides: true,
                speed: 500,
                touchEventsTarget: 'wrapper',
                navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev',
                },
                breakpoints: {
                    // Параметры для устройств с шириной экрана меньше 768px
                    1200: {
                        slidesPerView: 2, // 1 слайд на мобильных устройствах
                        spaceBetween: 20 // расстояние между слайдами
                    },
                    // Параметры для устройств с шириной экрана больше или равной 768px

                }

            });
        });
    }

    // Инициализация AOS
    AOS.init({
        duration: 750,
        easing: 'ease-in-out',
        mirror: false,
        anchorPlacement: 'top-bottom',
        startEvent: 'DOMContentLoaded',
        offset: 10,
        once: true,
        disable: 'mobile',
    });
});
