<footer class="w-full h-full">
    <div class="bg-[#F8F1E5] h-full text-black p-[50px] rounded-[15px] m-[15px] md:m-[0px] md:rounded-none">
        <p class="text-3xl 2xl:text-4xl font-medium pb-[50px] lg:pb-[100px]">Налоговые решения для вашего финансового роста.</p>
        <div class="flex flex-col xl:grid xl:grid-cols-12 gap-5">
            @if($contact)
            <div class="col-span-4">
                <a target="_blank" href="tel:{{ $contact->tel_link }}">
                    <div class="flex justify-between w-full h-[70px] items-center transition-transform duration-300 transform hover:scale-95">
                        <div class="flex gap-[5px] sm:gap-[15px]">
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-phone">
                                <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z" />
                            </svg>
                            <p class="text-base sm:text-xl lg:text-2xl">{{ $contact->tel }}</p>
                        </div>
                        <div class="">
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-move-up-right">
                                <path d="M13 5H19V11" />
                                <path d="M19 5L5 19" />
                            </svg>
                        </div>
                    </div>
                </a>
                <hr class="w-full border-[1px] border-[#1e151533]">
            </div>
            <div class="col-span-4">
                <a target="_blank" href="mailto:{{ $contact->mail }}">
                    <div class="flex justify-between w-full h-[70px] items-center transition-transform duration-300 transform hover:scale-95">
                        <div class="flex gap-[5px] sm:gap-[15px]">
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-mail">
                                <rect width="20" height="16" x="2" y="4" rx="2" />
                                <path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7" />
                            </svg>
                            <p class="text-base sm:text-xl lg:text-2xl">{{ $contact->mail }}</p>
                        </div>
                        <div class="">
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-move-up-right">
                                <path d="M13 5H19V11" />
                                <path d="M19 5L5 19" />
                            </svg>
                        </div>
                    </div>
                </a>
                <hr class="w-full border-[1px] border-[#1e151533]">
            </div>
            <div class="col-span-4">
                <a target="_blank" href="{{ $contact->tg_link }}">
                    <div class="flex justify-between w-full h-[70px] items-center transition-transform duration-300 transform hover:scale-95">
                        <div class="flex gap-[5px] sm:gap-[15px]">
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-telegram" viewBox="0 0 16 16">
                                <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0M8.287 5.906q-1.168.486-4.666 2.01-.567.225-.595.442c-.03.243.275.339.69.47l.175.055c.408.133.958.288 1.243.294q.39.01.868-.32 3.269-2.206 3.374-2.23c.05-.012.12-.026.166.016s.042.12.037.141c-.03.129-1.227 1.241-1.846 1.817-.193.18-.33.307-.358.336a8 8 0 0 1-.188.186c-.38.366-.664.64.015 1.088.327.216.589.393.85.571.284.194.568.387.936.629q.14.092.27.187c.331.236.63.448.997.414.214-.02.435-.22.547-.82.265-1.417.786-4.486.906-5.751a1.4 1.4 0 0 0-.013-.315.34.34 0 0 0-.114-.217.53.53 0 0 0-.31-.093c-.3.005-.763.166-2.984 1.09" />
                            </svg>
                            <p class="text-base sm:text-xl lg:text-2xl">{{ $contact->tg }}</p>
                        </div>
                        <div class="">
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-move-up-right">
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
        <div class="flex flex-col sm:flex-row md:grid md:grid-cols-12 gap-[30px] xl:gap-5 pt-[50px] lg:pt-[100px] justify-between">
            <div class="col-span-4">
                <p class="text-2xl xl:text-3xl font-medium">Навигация</p>
                <ul class="pt-[15px] text-2xl">
                    <li class="mb-2">
                        <a wire:navigate href="{{ route('page.about') }}" class="text-[#736C6A] hover:text-black inline-block transition-transform duration-300 hover:translate-x-2">О нас</a>
                    </li>
                    <li class="mb-2">
                        <a wire:navigate href="{{ route('page.contacts') }}" class="text-[#736C6A] hover:text-black inline-block transition-transform duration-300 hover:translate-x-2">Контакты</a>
                    </li>
                    <li class="mb-2">
                        <a wire:navigate href="{{ route('page.home') }}#reviews" class="text-[#736C6A] hover:text-black inline-block transition-transform duration-300 hover:translate-x-2">Отзывы</a>
                    </li>
                    <li class="mb-2">
                        <a wire:navigate href="{{ route('page.home') }}#partners" class="text-[#736C6A] hover:text-black inline-block transition-transform duration-300 hover:translate-x-2">Партнёры</a>
                    </li>
                </ul>
            </div>
            <div class="col-span-4">
                <a wire:navigate href="{{ route('page.products') }}">
                    <p class="text-2xl xl:text-3xl font-medium relative inline-block group">
                        Услуги
                        <span class=" absolute left-0 bottom-0 w-0 h-[2px] bg-black transform transition-all duration-300 group-hover:w-full"></span>
                    </p>
                </a>
                <ul class="pt-[15px] text-2xl">
                    <livewire:products.products-roster />
                </ul>
            </div>
        </div>
        <div class="pt-[100px] text-sm text-[#736C6A] flex justify-between items-center">
            <div class="flex gap-[15px] md:items-center md:flex-row flex-col items-start">
            <img class="h-full w-auto" src="{{ asset('images/logo.png') }}" alt="">
            <hr class="w-full border-[1px] border-[#1e151533] md:hidden">
            <p class="hidden md:block">|</p>
            <livewire:document.document-list />
            </div>
            <div class="">
                веб сайт от глебушка
            </div>
        </div>
    </div>
</footer>
