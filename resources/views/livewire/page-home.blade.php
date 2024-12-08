@push('meta')
<title>{{ 'Nalog Invest' }}</title>
<meta name="description" content="{{ 'Nalog Invest — ваш надежный партнер в области налогового консалтинга. Я предлагаю услуги по оптимизации налогов, консультированию и представительству в налоговых органах для бизнеса и частных лиц. Свяжитесь с нами для бесплатной консультации!' }}">
<meta name="keywords" content="{{ 'налоговый консалтинг, услуги налогового консультанта, оптимизация налогов, консультации по налогам, налоговые услуги, налоговое законодательство, налоговая оптимизация, представительство в налоговых органах, Nalog Invest' }}">
@endpush


<div class="">
    <div class="flex flex-col lg:grid lg:grid-cols-12 lg:gap-5  ">
        <div class="col-span-6 flex flex-col justify-between">
            <div class="px-[15px] md:px-[50px]">
                <p class="text-[50px] font-medium">Налоговой консалтинг</p>
                <p class="text-[32px] font-medium hidden lg:block">для частных инвесторов</p>
            </div>
            <div class="">
                <div class="hidden px-[50px] lg:flex lg:flex-1">
                    <a wire:navigate href="{{ route('page.contacts') }}" class="text-lg/6 font-semibold text-[#00343A] bg-[#EEBF37] px-5 py-3 rounded-full hover:scale-105 transition duration-300 ease-in-out">Проконсультироваться</a>
                </div>
            </div>
        </div>
        <div class="col-span-6 w-full relative mx-auto h-auto overflow-hidden">

            <p class="text-[24px] font-medium absolute p-[15px] md:px-[50px] z-10 lg:hidden">для частныых инвесторов</p>
            <img class="h-[90vh] w-full object-cover image  relative z-0 scale-110 transition-all duration-300" src="{{ asset('images/main.webp') }}" alt="main">
            <div class="p-[15px] md:px-[50px] lg:hidden">
                <p class="text-[18px] font-medium ">Екатерина Шевченко</p>
                <p class="text-[18px] font-medium ">Налоговый консультант</p>
            </div>
        </div>
    </div>
    <div class="px-[15px] md:px-[50px] xl:grid grid-cols-12 gap-5 pb-[50px] xl:pb-[100px] xl:pt-[200px] pt-[100px]">
        <div class="col-span-10 flex flex-col gap-[30px]">
            <h1>Услуги</h1>
            <h2>Наша цель — помочь вам принимать обоснованные решения и достигать ваших инвестиционных целей с минимальными налоговыми издержками.</h2>
        </div>
    </div>
    <livewire:products.products-list />
    <a wire:navigate href="{{ route('page.products') }}">
        <div data-aos="fade-up" class="px-[15px] md:px-[50px] w-full xl:h-[250px] flex flex-col xl:justify-end group lg:h-full">
            <div class="flex h-[250px] xl:h-full ">
                <div class="flex flex-col xl:flex-row gap-[40px] w-full xl:items-center xl:gap-[20px] 2xl:gap-[200px]">
                    <p class="text-2xl font-medium xl:font-normal font-lg:text-3xl 2xl:text-4xl pt-[40px] xl:pt-0 leading-[1.5] col-span-3">Все услуги</p>
                </div>
                <div class="xl:flex xl:items-center hover-effect pt-[40px] xl:pt-0">
                    <div class="flex items-center border-[2px] border-[#F7F7F7] group-hover:border-[#00343A] rounded-full w-[50px] h-[50px] xl:w-[60px] xl:h-[60px] justify-center relative overflow-hidden hover:bg-[#E3BF46] transition-all duration-300 ease-in-out">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-[30px] h-[30px] xl:w-[40px] xl:h-[40px] stroke-[#F7F7F7] group-hover:stroke-[#00343A] transition-colors duration-300 ease-in-out z-10" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-move-right">
                            <path d="M18 8L22 12L18 16" />
                            <path d="M2 12H22" />
                        </svg>
                        <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 bg-[#E3BF46] rounded-full w-0 h-0 transition-all duration-300 ease-in-out group-hover:w-full group-hover:h-full"></div>
                    </div>
                </div>
            </div>
            <hr class="w-full border-[1px] border-[#F7F7F7]">
        </div>
    </a>
    @if($about)
    <div class="px-[15px] md:px-[50px] xl:grid grid-cols-12 gap-5 pb-[50px] pt-[100px] xl:pb-[100px] xl:pt-[200px]">
        <div class="col-span-10 flex flex-col gap-[30px]">
            <h1>Как мы работаем</h1>
            <h2>Успех нашего налогового консалтинга основан на четких и прозрачных процессах, направленных на достижение ваших финансовых целей. Мы понимаем, что каждый клиент уникален, поэтому мы разработали пошаговый подход к каждому проекту.</h2>
        </div>
    </div>

    <div class="px-[15px] md:px-[50px] w-full h-full">
        <div class="flex flex-col gap-[50px] xl:grid xl:grid-cols-12 xl:gap-5">
            <div class="col-span-5 w-full relative mx-auto h-auto overflow-hidden rounded-2xl">
                <img src="{{ asset('storage/' . $about->image) }}" class="rounded-2xl object-cover image w-full h-auto relative z-0 scale-110 transition-all duration-300" alt="about" />
            </div>
            <div class="col-start-7 col-span-4 flex flex-col gap-[25px] xl:gap-[50px]">
                @if($specifics && count($specifics) > 0)
                <div data-aos="fade-up" class="flex flex-col gap-[15px] xl:gap-[50px]">
                    @foreach($specifics as $item)
                    <p class="text-2xl lg:text-3xl 2xl:text-4xl">{{ $item['h1'] }}</p>
                    <p class="text-lg ">{!! str($item['h2'])->sanitizeHtml() !!}</p>
                    @endforeach
                </div>
                @else
                @endif
            </div>
        </div>
    </div>
    @else
    @endif
    <div id="partners">
        <div class="px-[15px] md:px-[50px] xl:grid grid-cols-12 gap-5 pb-[50px] pt-[100px] xl:pb-[100px] xl:pt-[200px]">
            <div class="col-span-10 flex flex-col gap-[30px]">
                <h1>Партнёры</h1>
            </div>
        </div>
        <div class="">
            <livewire:partners.partners-list />
        </div>
    </div>
    <div id="reviews">
        <div class="px-[15px] md:px-[50px] xl:grid grid-cols-12 gap-5 pb-[50px] pt-[100px] xl:pb-[100px] xl:pt-[200px]">
            <div class="col-span-10 flex flex-col gap-[30px]">
                <h1>Отзывы</h1>
            </div>
        </div>
        <!-- Swiper -->
        <div class="js-swiper-freemode swiper text-black">
            <div class="swiper-wrapper flex ">
                @if($comment)
                <div class="swiper-slide px-[15px] md:px-[50px] xl:px-0 m-auto">
                    <figure class="flex w-full h-[400px] md:h-[550px] rounded-2xl flex-col justify-between  p-5  bg-[#F7F7F7] ">
                        <blockquote class=" mb-8  text-black">
                            <p class="text-base md:text-2xl">"{{ $comment->description }}</p>
                        </blockquote>
                        <figcaption class="flex flex-row-reverse space-x-3 gap-3 md:gap-5 items-end">
                            <img class="w-16 h-16 md:w-24 md:h-24 object-cover rounded-full" src="{{ asset('storage/' . $comment->image) }}" alt="profile picture">
                            <div class="space-y-0.5 font-medium  text-left">
                                <div class="text-base md:text-2xl font-medium">{{ $comment->name }}</div>
                                <div class="text-base md:text-2xl ">{{ $comment->title }}</div>
                            </div>
                        </figcaption>
                    </figure>
                </div>
                <div class="swiper-slide px-[15px] md:px-[50px] xl:px-0 m-auto">
                    <figure class="flex w-full h-[400px] md:h-[550px] rounded-2xl flex-col justify-between  p-5  bg-[#F7F7F7] ">
                        <blockquote class=" mb-8  text-black">
                            <p class="text-base md:text-2xl">"{{ $comment->description2 }}</p>
                        </blockquote>
                        <figcaption class="flex flex-row-reverse space-x-3 gap-3 md:gap-5 items-end">
                            <img class="w-16 h-16 md:w-24 md:h-24 object-cover rounded-full" src="{{ asset('storage/' . $comment->image2) }}" alt="profile picture">
                            <div class="space-y-0.5 font-medium  text-left">
                                <div class="text-base md:text-2xl font-medium">{{ $comment->name2 }}</div>
                                <div class="text-base md:text-2xl ">{{ $comment->title2 }}</div>
                            </div>
                        </figcaption>
                    </figure>
                </div>
                <div class="swiper-slide px-[15px] md:px-[50px] xl:px-0 m-auto">
                    <figure class="flex w-full h-[400px] md:h-[550px] rounded-2xl flex-col justify-between  p-5  bg-[#F7F7F7] ">
                        <blockquote class=" mb-8  text-black">
                            <p class="text-base md:text-2xl">"{{ $comment->description3 }}</p>
                        </blockquote>
                        <figcaption class="flex flex-row-reverse space-x-3 gap-3 md:gap-5 items-end">
                            <img class="w-16 h-16 md:w-24 md:h-24 object-cover rounded-full" src="{{ asset('storage/' . $comment->image3) }}" alt="profile picture">
                            <div class="space-y-0.5 font-medium  text-left">
                                <div class="text-base md:text-2xl font-medium">{{ $comment->name3 }}</div>
                                <div class="text-base md:text-2xl ">{{ $comment->title3 }}</div>
                            </div>
                        </figcaption>
                    </figure>
                </div>
                @else
                @endif
                <div class="swiper-slide px-[15px] md:px-[50px] xl:px-0 m-auto">
                    <div class="max-w-[900px] h-[400px] md:h-[550px] bg-[#F7F7F7] rounded-2xl p-5 flex flex-col justify-between">
                        <p class="text-2xl lg:text-3xl 2xl:text-4xl font-medium ">Оставьте свой отзыв</p>
                        <form id="contactForm" action="{{ route('feedback.store') }}" method="POST" class="flex flex-col gap-[5px]  md:gap-[25px]">
                            @csrf
                            <div class="relative z-0 w-full mb-5 group">
                                <input type="text" name="name" id="name" class="block py-2.5 px-0 w-full text-[16px] md:text-[24px] text-black bg-transparent border-0 border-b-2 border-black appearance-none focus:outline-none focus:ring-0 focus:border-[#EEBF37] peer" placeholder=" " required />
                                <label for="name" class=" absolute text-[16px] md:text-[24px] text-black duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-[#EEBF37] peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Ваше имя</label>
                            </div>

                            <div class="relative z-0 w-full mb-5 group">
                                <input type="email" name="mail" id="mail" class="block py-2.5 px-0 w-full text-[16px] md:text-[24px] text-black bg-transparent border-0 border-b-2 border-black appearance-none  focus:outline-none focus:ring-0 focus:border-[#EEBF37]  peer" placeholder=" " required />
                                <label for="mail" class=" absolute text-[16px] md:text-[24px] text-black  duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-[#EEBF37]  peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Email</label>
                            </div>
                            <div class="relative z-0 w-full mb-5 group">
                                <textarea type="text" name="description" id="description" class="block py-2.5 px-0 w-full text-[16px] md:text-[24px] text-black bg-transparent border-0 border-b-2 border-black appearance-none  focus:outline-none focus:ring-0 focus:border-[#EEBF37]  peer" placeholder=" " required></textarea>
                                <label for="description" class=" absolute text-[16px] md:text-[24px] text-black  duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-[#EEBF37]  peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Комментарий</label>
                            </div>
                            <div>
                                <label for="hs-success-checkbox" class="flex items-center space-x-3 ">
                                    <input required type="checkbox" name="hs-success-checkbox" class="w-4 h-4  shrink-0 mt-0.5 border-gray-200 rounded text-black focus:ring-black disabled:opacity-50 disabled:pointer-events-none" id="hs-success-checkbox" checked="">
                                    <span class="text-[18px] text-black">Я согласен с условием <a href="" class="text-[#EEBF37] hover:underline">политики конфиденциальности</a></span>
                                </label>
                            </div>
                            <div class="flex gap-5 items-center">
                                <button type="submit" class="flex">
                                    <a class="text-lg/6 font-semibold text-[#00343A] bg-[#EEBF37] px-5 py-3 rounded-full hover:scale-105 transition duration-300 ease-in-out">Отправить</a>
                                </button>
                                <div id="loadingIndicator" style="display:none;">Загрузка...</div>
                            </div>
                        </form>
                        <div id="responseMessage"></div>
                    </div>
                </div>
            </div>
            <!-- Arrows -->
            <div class="swiper-button-prev rounded-button">
                <svg class="text-white w-[24px] h-[24px]" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M6 8L2 12L6 16" />
                    <path d="M2 12H22" />
                </svg>
            </div>
            <div class="swiper-button-next rounded-button">
                <svg class="text-white" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M18 8L22 12L18 16" />
                    <path d="M2 12H22" />
                </svg>
            </div>
        </div>
        <!-- End Swiper -->
    </div>
    <div class="flex w-full justify-center items-center py-[100px] xl:py-[200px] px-[15px] md:px-[50px]">
        <hr class="hidden sm:block w-full border-[1px] border-[#F7F7F7]">
        <div class="flex w-[450%] sm:w-[200%] md:w-[150%] lg:w-[90%] xl:w-[50%] justify-around">
            <a wire:navigate href="{{ route('page.contacts') }}" class="text-lg/6 font-semibold text-[#00343A] bg-[#EEBF37] px-5 py-3 rounded-full hover:scale-105 transition duration-300 ease-in-out">Проконсультироваться</a>
        </div>
        <hr class="hidden sm:block w-full border-[1px] border-[#F7F7F7]">
    </div>
</div>
