document.addEventListener("livewire:navigated", function () {
    // Инициализация Swiper
    const swiperElements = document.querySelectorAll(".swiper");

    if (swiperElements.length) {
        swiperElements.forEach((el) => {
            new Swiper(el, {
                direction: "horizontal",
                loop: false,
                initialSlide: 1,
                spaceBetween: 10,
                slidesPerView: 1,
                centeredSlides: true,
                speed: 500,
                touchEventsTarget: "wrapper",
                navigation: {
                    nextEl: ".swiper-button-next",
                    prevEl: ".swiper-button-prev",
                },
                breakpoints: {
                    // Параметры для устройств с шириной экрана меньше 768px
                    1200: {
                        slidesPerView: 2, // 1 слайд на мобильных устройствах
                        spaceBetween: 20, // расстояние между слайдами
                        disabled: true,
                    },
                    // Параметры для устройств с шириной экрана больше или равной 768px
                },
            });
        });
    }

    // Инициализация AOS
    AOS.init({
        duration: 750, // Длительность анимации
        easing: "ease-in-out", // Еasing анимации
        mirror: false, // Отражение анимации при прокрутке обратно
        anchorPlacement: "top-bottom", // Положение якоря
        startEvent: "DOMContentLoaded", // Событие запуска
        offset: 10, // Начать анимацию, когда элемент будет на 20px видимости
        once: true, // Анимация сработает только один раз
        disable: "mobile", // Отключить для мобильных устройств (при желании)
    });

    $(document).ready(function () {
        $("#contactForm").on("submit", function (event) {
            event.preventDefault();
            var formData = $(this).serialize();
            $("#responseMessage").html("");
            $("#loadingIndicator").show();

            $.ajax({
                url: $(this).attr("action"),
                type: "POST",
                data: formData,
                success: function (response) {
                    showNotification("success", response.message); // Use Toastify for success
                    $("#contactForm")[0].reset();
                },
                error: function (xhr) {
                    let errorMessage = "";
                    if (xhr.responseJSON && xhr.responseJSON.errors) {
                        $.each(xhr.responseJSON.errors, function (key, value) {
                            errorMessage += value[0] + "<br>";
                        });
                    } else {
                        errorMessage =
                            "Вы слишком часто отправляете сообщения. Пожалуйста, попробуйте позже.";
                    }
                    showNotification("error", errorMessage); // Use Toastify for error
                },
                complete: function () {
                    $("#loadingIndicator").hide();
                },
            });
        });
    });

    // Function to show notifications using ToastifyJS
    function showNotification(type, message) {
        Toastify({
            text: message,
            duration: 3000, // 3 seconds
            gravity: "top", // `top` or `bottom`
            position: "right", // `left`, `center` or `right`
            stopOnFocus: true, // Prevents dismissing of toast on hover
            style: {
                background: type === "success" ? "white" : "white",
                borderRadius: "50px",
                color: type === "success" ? "green" : "red",
            },
        }).showToast();
    }

    // ваввыаавы

    $(document).ready(function () {
        $("#tg").on("submit", function (event) {
            event.preventDefault();
            var formData = $(this).serialize();
            $("#responseMessage").html("");
            $("#loadingIndicator").show();

            $.ajax({
                url: $(this).attr("action"),
                type: "POST",
                data: formData,
                success: function (response) {
                    showNotification("success", response.message); // Use Toastify for success
                    $("#tg")[0].reset();
                },
                error: function (xhr) {
                    let errorMessage = "";
                    if (xhr.responseJSON && xhr.responseJSON.errors) {
                        $.each(xhr.responseJSON.errors, function (key, value) {
                            errorMessage += value[0] + "<br>";
                        });
                    } else {
                        errorMessage =
                            "Вы слишком часто отправляете сообщения. Пожалуйста, попробуйте позже.";
                    }
                    showNotification("error", errorMessage); // Use Toastify for error
                },
                complete: function () {
                    $("#loadingIndicator").hide();
                },
            });
        });
    });

    const images = document.querySelectorAll(".image");

    const observer = new IntersectionObserver((entries) => {
        entries.forEach((entry) => {
            if (entry.isIntersecting) {
                // Когда изображение появляется в области видимости, добавляем класс для анимации
                entry.target.classList.add("scale");

                // Отключаем наблюдение за этим элементом, чтобы анимация не повторялась
                observer.unobserve(entry.target);
            }
        });
    });

    // Начинаем наблюдение за каждым изображением
    images.forEach((image) => {
        observer.observe(image);
    });

    const mobileMenu = document.getElementById("mobileMenu");
    const openMenuButton = document.getElementById("openMenuButton");
    const closeMenuButton = document.getElementById("closeMenuButton");
    const productButton = document.getElementById("productButton");
    const productSubmenu = document.getElementById("disclosure-1");

    // Открытие мобильного меню
    openMenuButton.addEventListener("click", () => {
        mobileMenu.classList.remove("hidden");
    });

    // Закрытие мобильного меню
    closeMenuButton.addEventListener("click", () => {
        mobileMenu.classList.add("hidden");
        productSubmenu.classList.add("hidden"); // Скрыть подменю при закрытии меню
    });

    // Переключение подменю "Product"
    productButton.addEventListener("click", () => {
        productSubmenu.classList.toggle("hidden");
        const isExpanded =
            productButton.getAttribute("aria-expanded") === "true";
        productButton.setAttribute("aria-expanded", !isExpanded);
    });




});
