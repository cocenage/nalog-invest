<div id="products" class="">
    <div class="px-[15px] md:px-[50px] xl:grid grid-cols-12 gap-5 py-[100px]">
        <div class="col-span-10 flex flex-col gap-[30px]">
            <h1>Услуги</h1>
            <h2>Наша цель — помочь вам принимать обоснованные решения и достигать ваших инвестиционных целей с минимальными налоговыми издержками.</h2>
        </div>
    </div>



    <!-- <div class="px-[50px] w-full h-[250px] flex items-center">
        <div class="xl:grid grid-cols-12 gap-5">
            <p class="text-4xl leading-[1.5] col-span-3">Консультация</p>
            <p class="text-lg col-span-7">Наши эксперты готовы предоставить вам глубокий анализ вашей налоговой ситуации и предложить эффективные решения, соответствующие вашим уникальным потребностям. Консультация включает в себя:</p>
            <p class="col-span-2 flex justify-end items-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-circle-arrow-right">
                    <circle cx="12" cy="12" r="10" />
                    <path d="M8 12h8" />
                    <path d="m12 16 4-4-4-4" />
                </svg>
            </p>
        </div>
        <hr class="w-full ">
    </div> -->

    <!--
    <div class="w-full h-[250px] px-[15px] md:px-[50px] flex flex-col justify-center">

        <div class="flex">
            <div class="flex flex-col xl:flex-row gap-4 w-full xl:justify-between ">
                <p class="text-2xl lg:text-3xl 2xl:text-4xl leading-[1.5] col-span-3">Консультация</p>
                <p class="text-lg col-span-7 xl:w-[1000px]">Наши эксперты готовы предоставить вам глубокий анализ вашей налоговой ситуации и предложить эффективные решения, соответствующие вашим уникальным потребностям. Консультация включает в себя:</p>
            </div>
            <div class="">
                <p class="col-span-2 flex justify-end items-center xl:pl-[250px]">
                    <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-circle-arrow-right">
                        <circle cx="12" cy="12" r="10" />
                        <path d="M8 12h8" />
                        <path d="m12 16 4-4-4-4" />
                    </svg>
                </p>
            </div>

        <div class="">
        <hr class="w-full border-1 border-red-100 mt-[30px]">
        </div>
        </div>
    </div> -->



    <livewire:products.products-list />
    <a wire:navigate href="{{ route('page.products') }}">
        <div data-aos="fade-up" class="px-[15px] md:px-[50px] w-full h-[full] xl:h-[250px] flex flex-col justify-end group">
            <div class="flex h-[250px] xl:h-full ">
                <div class="flex flex-col xl:flex-row gap-[40px] w-full xl:items-center xl:gap-[20px] 2xl:gap-[200px]">
                    <p class="text-2xl font-medium xl:font-normal font-  lg:text-3xl 2xl:text-4xl pt-[40px] xl:pt-0 leading-[1.5] col-span-3">Все услуги</p>
                </div>
                <div class="xl:flex xl:items-center hover-effect pt-[40px] xl:pt-0">
                    <div class="flex items-center border-[1px] border-[#F8F1E5] group-hover:border-[#00343A] rounded-full w-[50px] h-[50px] xl:w-[60px] xl:h-[60px] justify-center relative overflow-hidden hover:bg-[#E3BF46] transition-all duration-300 ease-in-out">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-[30px] h-[30px] xl:w-[40px] xl:h-[40px] stroke-[#F8F1E5] group-hover:stroke-[#00343A] transition-colors duration-300 ease-in-out z-10" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-move-right">
                            <path d="M18 8L22 12L18 16" />
                            <path d="M2 12H22" />
                        </svg>
                        <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 bg-[#E3BF46] rounded-full w-0 h-0 transition-all duration-300 ease-in-out group-hover:w-full group-hover:h-full"></div>
                    </div>
                </div>
            </div>
            <hr class="w-full border-[1px] border-[#F8F1E5]">
        </div>
    </a>





    <div class="px-[15px] md:px-[50px] xl:grid grid-cols-12 gap-5 pt-[200px] pb-[100px]">
        <div class="col-span-10 flex flex-col gap-[30px]">
            <h1>Как мы работаем</h1>
            <h2>Успех нашего налогового консалтинга основан на четких и прозрачных процессах, направленных на достижение ваших финансовых целей. Мы понимаем, что каждый клиент уникален, поэтому мы разработали пошаговый подход к каждому проекту.</h2>
        </div>
    </div>

    <div class="px-[15px] md:px-[50px] w-full h-full">
        <div class="flex flex-col gap-[50px] xl:grid xl:grid-cols-12 xl:gap-5">
            <div class="col-span-5">
                <img src="{{ asset('images/Rectangle 74.png') }}" class="rounded-2xl object-cover h-full w-full" alt="about" />
            </div>
            <div class="col-start-7 col-span-4 flex flex-col gap-[25px] xl:gap-[50px]">
                <div class="flex flex-col gap-[15px] xl:gap-[50px]">
                    <p class="text-2xl lg:text-3xl 2xl:text-4xl">Первичная консультация1</p>
                    <p class="text-lg ">На первом этапе мы проводим детальную консультацию, в ходе которой изучаем вашу текущую налоговую ситуацию, определяем ключевые задачи и выявляем ваши ожидания. Этот этап помогает нам лучше понять ваши цели и потребности.</p>
                </div>

            </div>
        </div>
    </div>

    <div class="px-[15px] md:px-[50px] xl:grid grid-cols-12 gap-5 py-[200px]">
        <div class="col-span-10 flex flex-col gap-[30px]">
            <h1>Партнёры</h1>
        </div>
    </div>

    <div class="px-[15px] md:px-[50px]">
        <div class="w-full h-[550px] bg-[#F8F1E5] rounded-2xl flex text-black">
            <img src="{{ asset('images/Rectangle 74.png') }}" class="object-cover w-[550px] h-[550px] p-5 rounded-[50px]" alt="partner">
            <div class="flex flex-col justify-between p-5 pl-0">
                <p class="text-4xl">Александр Игнатов - финансовый консультант по инвестициям в Долларах и Евро. Иностранные карты, валютные депозиты.</p>
                <div class="flex justify-between">
                    <div class="flex flex-col gap-1">
                        <p class="text-2xl font-medium">Александр Игнатов</p>
                        <p class="text-2xl">Финансовый консультант</p>
                    </div>
                    <div class="flex items-end h-full">
                        <a href="#" class="text-xl/6 font-semibold text-[#F8F1E5] bg-[#00343A] px-6 py-4 rounded-full flex gap-2 items-center hover:scale-105 transition duration-300 ease-in-out"><img class="w-6 h-6" src="{{ asset('images/telegram-logo-24.png') }}" alt="">@Ignatov_as</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="px-[15px] md:px-[50px] xl:grid grid-cols-12 gap-5 py-[200px]">
        <div class="col-span-10 flex flex-col gap-[30px]">
            <h1>Отзывы</h1>
        </div>
    </div>

     <!-- Swiper -->
     <div class="js-swiper-freemode swiper text-black">
        <div class="swiper-wrapper ">
            <div class="swiper-slide ">
                <div class="max-w-[900px] h-[550px] bg-[#F8F1E5] rounded-2xl p-5 flex flex-col justify-between mx-auto"> <!-- mx-auto для центрирования -->
                    <p class="text-2xl">1 с NalogInvest вашей компании стала для меня настоящим открытменя настоящим открытименя настоящим открытименя настоящим открытименя настоящим открытиием! Я обратился к ним за консультацией, так как был озадачен своими налоговыми обязательствами и не знал, как оптимизировать свои расходы. Команда профессионалов внимательно изучила мою финансовую ситуацию и предложила индивидуальное решение, которое помогло значительно сократить мои налоговые платежи. Особенно мне понравился их внимательный подход и готовность отвечать на все мои вопросы. Рекомендую всем, кто ищет надежную поддержку в вопросах налогового консалтинга!</p>
                    <div class="flex justify-end items-end gap-5">
                        <div class="flex flex-col items-end gap-1">
                            <p class="text-2xl font-medium">Александр Игнатов</p>
                            <p class="text-2xl">Финансовый консультант</p>
                        </div>
                        <div class="">
                            <img src="{{ asset('images/Rectangle 74.png') }}" class="w-24 h-24 object-cover rounded-full" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide ">
                <div class="max-w-[900px] h-[550px] bg-[#F8F1E5] rounded-2xl p-5 flex flex-col justify-between mx-auto"> <!-- mx-auto для центрирования -->
                    <p class="text-2xl">2 с NalogInvest вашей компании стала для меня настоящим открытменя настоящим открытименя настоящим открытименя настоящим открытименя настоящим открытиием! Я обратился к ним за консультацией, так как был озадачен своими налоговыми обязательствами и не знал, как оптимизировать свои расходы. Команда профессионалов внимательно изучила мою финансовую ситуацию и предложила индивидуальное решение, которое помогло значительно сократить мои налоговые платежи. Особенно мне понравился их внимательный подход и готовность отвечать на все мои вопросы. Рекомендую всем, кто ищет надежную поддержку в вопросах налогового консалтинга!</p>
                    <div class="flex justify-end items-end gap-5">
                        <div class="flex flex-col items-end gap-1">
                            <p class="text-2xl font-medium">Александр Игнатов</p>
                            <p class="text-2xl">Финансовый консультант</p>
                        </div>
                        <div class="">
                            <img src="{{ asset('images/Rectangle 74.png') }}" class="w-24 h-24 object-cover rounded-full" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="max-w-[900px] h-[550px] bg-[#F8F1E5] rounded-2xl p-5 flex flex-col justify-between mx-auto"> <!-- mx-auto для центрирования -->
                    <p class="text-2xl">3 с NalogInvest вашей компании стала для меня настоящим открытменя настоящим открытименя настоящим открытименя настоящим открытименя настоящим открытиием! Я обратился к ним за консультацией, так как был озадачен своими налоговыми обязательствами и не знал, как оптимизировать свои расходы. Команда профессионалов внимательно изучила мою финансовую ситуацию и предложила индивидуальное решение, которое помогло значительно сократить мои налоговые платежи. Особенно мне понравился их внимательный подход и готовность отвечать на все мои вопросы. Рекомендую всем, кто ищет надежную поддержку в вопросах налогового консалтинга!</p>
                    <div class="flex justify-end items-end gap-5">
                        <div class="flex flex-col items-end gap-1">
                            <p class="text-2xl font-medium">Александр Игнатов</p>
                            <p class="text-2xl">Финансовый консультант</p>
                        </div>
                        <div class="">
                            <img src="{{ asset('images/Rectangle 74.png') }}" class="w-24 h-24 object-cover rounded-full" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="max-w-[900px] h-[550px] bg-[#F8F1E5] rounded-2xl p-5 flex flex-col justify-between mx-auto"> <!-- mx-auto для центрирования -->
                    <p class="text-2xl">4 с NalogInvest вашей компании стала для меня настоящим открытменя настоящим открытименя настоящим открытименя настоящим открытименя настоящим открытиием! Я обратился к ним за консультацией, так как был озадачен своими налоговыми обязательствами и не знал, как оптимизировать свои расходы. Команда профессионалов внимательно изучила мою финансовую ситуацию и предложила индивидуальное решение, которое помогло значительно сократить мои налоговые платежи. Особенно мне понравился их внимательный подход и готовность отвечать на все мои вопросы. Рекомендую всем, кто ищет надежную поддержку в вопросах налогового консалтинга!</p>
                    <div class="flex justify-end items-end gap-5">
                        <div class="flex flex-col items-end gap-1">
                            <p class="text-2xl font-medium">Александр Игнатов</p>
                            <p class="text-2xl">Финансовый консультант</p>
                        </div>
                        <div class="">
                            <img src="{{ asset('images/Rectangle 74.png') }}" class="w-24 h-24 object-cover rounded-full" alt="">
                        </div>
                    </div>
                </div>
            </div>





        </div>

        <!-- Arrows -->
   <!-- Кастомные кнопки навигации -->
   <div class="swiper-button-prev">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <path d="M6 12h12M6 8l-4 4 4 4"/>
        </svg>
    </div>
    <div class="swiper-button-next">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <path d="M18 12H6M18 16l4-4-4-4"/>
        </svg>
    </div>
    </div>
    <!-- End Swiper -->





    <div class="flex w-full justify-center items-center py-[200px] px-[50px]">
        <hr class="w-full border-[1px] border-[#F8F1E5]">
        <div class="flex w-[40%] justify-around">
            <a href="#" class="text-lg/6 font-semibold text-[#00343A] bg-[#EEBF37] px-5 py-3 rounded-full hover:scale-105 transition duration-300 ease-in-out">Проконсультироваться</a>
        </div>
        <hr class="w-full border-[1px] border-[#F8F1E5]">
    </div>








</div>
