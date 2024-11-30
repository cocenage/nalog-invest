document.addEventListener('livewire:navigated', function() {

    const swiper = new Swiper('.swiper', {

        direction: 'horizontal',
        loop: true,
        spaceBetween: 20,
        slidesPerView: 'auto', //Отображается столько слайдов, сколько помещается
        centeredSlides: true, //Центрирует слайды
        speed: 500, // Время анимации в мс
        touchEventsTarget: 'wrapper',

        navigation: {
          nextEl: '.swiper-button-next',
          prevEl: '.swiper-button-prev',
        },
      });

      swiper.slideTo(1, 0, false)



      const button = document.querySelector('.hover-button');
const maxOffset = 20; // Увеличено максимальное смещение
const sensitivity = 100 ; // Введено значение чувствительности

button.addEventListener('mousemove', (e) => {
  const rect = button.getBoundingClientRect();
  const x = e.clientX - rect.left - rect.width / 2;
  const y = e.clientY - rect.top - rect.height / 2;

  const offsetX = Math.min(maxOffset, Math.max(-maxOffset, x / sensitivity));
  const offsetY = Math.min(maxOffset, Math.max(-maxOffset, y / sensitivity));

  button.style.transform = `translate(${offsetX}px, ${offsetY}px) scale(1.05)`;
});

button.addEventListener('mouseleave', () => {
  button.style.transform = 'translate(0, 0) scale(1)';
});

});
