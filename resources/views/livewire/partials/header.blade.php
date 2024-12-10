<header class="bg-[#00343A] overflow-hidden w-full sticky top-0 z-50">
    <nav class="mx-auto flex items-center justify-between px-[15px] py-[15px] md:px-[50px] md:py-6 " aria-label="Global">
        <div class="flex lg:flex-1 ">
            <a wire:navigate href="{{ route('page.home') }}" class="items-center flex" href="/" class="-m-1.5 p-1.5">
                <img class="h-[50px] w-[50px] md:h-[58px] md:w-[58px]" src="{{ asset('images/logo.svg') }}" alt="logo">
                <p class="text-[24px] text-[#EEBF37] ml-4 lg:block hidden">Nalog Invest</p>
            </a>
        </div>
        <div class="flex lg:hidden">
            <button id="openMenuButton" type="button" class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-[#EEBF37]">
                <span class="sr-only">Open main menu</span>

                <svg class="size-8" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-align-justify"><path d="M3 12h18"/><path d="M3 18h18"/><path d="M3 6h18"/></svg>
            </button>
        </div>
        <div class="hidden lg:flex lg:gap-x-12">
            <a wire:navigate href="{{ route('page.products') }}">
                <p class="text-lg/6 relative inline-block text-[#EEBF37] group">
                    Услуги
                    <span class=" absolute left-0 bottom-0 w-0 h-[1px] bg-[#EEBF37] transform transition-all duration-300 group-hover:w-full"></span>
                </p>
            </a>
            <a wire:navigate href="{{ route('page.about') }}">
                <p class="text-lg/6 relative inline-block text-[#EEBF37] group">
                    Обо мне
                    <span class=" absolute left-0 bottom-0 w-0 h-[1px] bg-[#EEBF37] transform transition-all duration-300 group-hover:w-full"></span>
                </p>
            </a>
            <a wire:navigate href="{{ route('page.contacts') }}">
                <p class="text-lg/6 relative inline-block text-[#EEBF37] group">
                    Контакты
                    <span class=" absolute left-0 bottom-0 w-0 h-[1px] bg-[#EEBF37] transform transition-all duration-300 group-hover:w-full"></span>
                </p>
            </a>
        </div>
        <div class="hidden lg:flex lg:flex-1 lg:justify-end">
            <a wire:navigate href="{{ route('page.contacts') }}" class="text-lg/6 font-semibold text-[#00343A] bg-[#EEBF37] px-5 py-3 rounded-full hover:scale-105 transition duration-300 ease-in-out">Проконсультироваться</a>
        </div>
    </nav>
    <!-- Mobile menu, show/hide based on menu open state. -->
    <div id="mobileMenu" class="lg:hidden hidden" role="dialog" aria-modal="true">
        <!-- Background backdrop -->
        <div class="fixed inset-0 z-10 bg-black opacity-30"></div>
        <div class="fixed inset-y-0 right-0 z-10 w-full overflow-y-auto bg-[#F7F7F7] px-[15px] py-[15px] md:py-6 sm:max-w-sm sm:ring-1 sm:ring-gray-900/10">
            <div class="flex items-center justify-between">
                <a class="items-center flex" href="/" class="-m-1.5 p-1.5">
                <img class="h-[50px] w-[50px] md:h-[58px] md:w-[58px]" src="{{ asset('images/logo.svg') }}" alt="logo">
                    <!-- <p class="text-[24px] text-[#EEBF37] ml-4">Nalog Invest</p> -->
                </a>
                <button id="closeMenuButton" type="button" class="-m-2.5 rounded-md p-2.5 text-gray-700">
                    <span class="sr-only">Close menu</span>

                    <svg class="size-8 text-[#EEBF37]" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-x"><path d="M18 6 6 18"/><path d="m6 6 12 12"/></svg>
                </button>
            </div>
            <div class="mt-6 flow-root">
                <div class="-my-6 divide-y divide-gray-500/10 flex flex-col">
                    <div class="space-y-2 py-6">
                        <div class="-mx-3">
                            <button id="productButton" type="button" class="flex w-full items-center justify-between rounded-lg py-2 pr-3.5 pl-3 text-2xl xl:text-3xl font-medium text-black" aria-controls="disclosure-1" aria-expanded="false">
                                Услуги
                                <svg class="size-5 flex-none" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                    <path fill-rule="evenodd" d="M5.22 8.22a.75.75 0 0 1 1.06 0L10 11.94l3.72-3.72a.75.75 0 1 1 1.06 1.06l-4.25 4.25a.75.75 0 0 1-1.06 0L5.22 9.28a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd" />
                                </svg>
                            </button>
                            <!-- 'Product' sub-menu -->
                            <div id="disclosure-1" class="mt-2 space-y-2 hidden mx-3 text-2xl">
                                <livewire:products.products-roster />
                            </div>
                        </div>
                        <a wire:navigate href="{{ route('page.about') }}" class="-mx-3 block rounded-lg px-3 py-2 text-2xl xl:text-3xl font-medium text-black ">Обо мне</a>
                        <a wire:navigate href="{{ route('page.contacts') }}" class="-mx-3 block rounded-lg px-3 py-2 text-2xl xl:text-3xl font-medium text-black ">Контакты</a>
                        <a  href="{{ route('page.home') }}#reviews" class="-mx-3 block rounded-lg px-3 py-2 text-2xl xl:text-3xl font-medium text-black ">Отзывы</a>
                        <a href="{{ route('page.home') }}#partners" class="-mx-3 block rounded-lg px-3 py-2 text-2xl xl:text-3xl font-medium text-black ">Партнёры</a>
                    </div>
                    <div class="">
                        <div class="flex flex-col xl:grid xl:grid-cols-12 gap-5">
                            @if($contact)
                            <div class="col-span-4 text-black">
                                <a target="_blank" href="tel:{{ $contact->tel_link }}">
                                    <div class="flex justify-between w-full h-[70px] items-center transition-transform duration-300 transform hover:scale-95">
                                        <div class="flex gap-[10px] sm:gap-[15px]">
                                            <svg class="w-6 h-6 md:w-[30px] md:h-[30px]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-phone">
                                                <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z" />
                                            </svg>
                                            <p class="text-base sm:text-xl lg:text-2xl">{{ $contact->tel }}</p>
                                        </div>
                                        <div class="">
                                            <svg class="w-6 h-6 md:w-[30px] md:h-[30px]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-move-up-right">
                                                <path d="M13 5H19V11" />
                                                <path d="M19 5L5 19" />
                                            </svg>
                                        </div>
                                    </div>
                                </a>
                                <hr class="w-full border-[1px] border-[#1e151533]">
                            </div>
                            <div class="col-span-4 text-black">
                                <a target="_blank" href="mailto:{{ $contact->mail }}">
                                    <div class="flex justify-between w-full h-[70px] items-center transition-transform duration-300 transform hover:scale-95">
                                        <div class="flex gap-[10px] sm:gap-[15px]">
                                            <svg class="w-6 h-6 md:w-[30px] md:h-[30px]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-mail">
                                                <rect width="20" height="16" x="2" y="4" rx="2" />
                                                <path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7" />
                                            </svg>
                                            <p class="text-base sm:text-xl lg:text-2xl">{{ $contact->mail }}</p>
                                        </div>
                                        <div class="">
                                            <svg class="w-6 h-6 md:w-[30px] md:h-[30px]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-move-up-right">
                                                <path d="M13 5H19V11" />
                                                <path d="M19 5L5 19" />
                                            </svg>
                                        </div>
                                    </div>
                                </a>
                                <hr class="w-full border-[1px] border-[#1e151533]">
                            </div>
                            <div class="col-span-4 text-black">
                                <a target="_blank" href="{{ $contact->tg_link }}">
                                    <div class="flex justify-between w-full h-[70px] items-center transition-transform duration-300 transform hover:scale-95">
                                        <div class="flex gap-[10px] sm:gap-[15px]">
                                            <svg class="w-6 h-6 md:w-[30px] md:h-[30px]" xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-telegram" viewBox="0 0 16 16">
                                                <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0M8.287 5.906q-1.168.486-4.666 2.01-.567.225-.595.442c-.03.243.275.339.69.47l.175.055c.408.133.958.288 1.243.294q.39.01.868-.32 3.269-2.206 3.374-2.23c.05-.012.12-.026.166.016s.042.12.037.141c-.03.129-1.227 1.241-1.846 1.817-.193.18-.33.307-.358.336a8 8 0 0 1-.188.186c-.38.366-.664.64.015 1.088.327.216.589.393.85.571.284.194.568.387.936.629q.14.092.27.187c.331.236.63.448.997.414.214-.02.435-.22.547-.82.265-1.417.786-4.486.906-5.751a1.4 1.4 0 0 0-.013-.315.34.34 0 0 0-.114-.217.53.53 0 0 0-.31-.093c-.3.005-.763.166-2.984 1.09" />
                                            </svg>
                                            <p class="text-base sm:text-xl lg:text-2xl">{{ $contact->tg }}</p>
                                        </div>
                                        <div class="">
                                            <svg class="w-6 h-6 md:w-[30px] md:h-[30px]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-move-up-right">
                                                <path d="M13 5H19V11" />
                                                <path d="M19 5L5 19" />
                                            </svg>
                                        </div>
                                    </div>
                                </a>
                                <hr class="w-full border-[1px] border-[#1e151533]">
                            </div>
                            @else
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
