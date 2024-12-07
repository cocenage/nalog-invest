@push('meta')
<title>{{ 'Nalog Invest | Страница не найдена' }}</title>
<meta name="description" content="{{ 'Страница не найдена' }}">
<meta name="keywords" content="{{ 'ошибка 404' }}">
@endpush

<div class="pt-[20px] md:pt-[100px] h-screen">
    <nav class="px-[15px] md:px-[50px] w-full rounded-md text-sm">
        <ol class="list-reset flex ">
            <li class="group">
                <a
                    wire:navigate href="{{ route('page.home') }}"
                    class="text-[#E3BF46] group-hover:text-[#F7F7F7] transition duration-300 ease-in-out">Главная
                    <span class="mx-2 text-[#E3BF46] group-hover:text-[#F7F7F7] transition duration-300 ease-in-out">/</span>
                </a>
            </li>
            <li class="text-[#F7F7F7]">?</li>
        </ol>
    </nav>

    <div class="px-[15px] md:px-[50px] xl:grid grid-cols-12 gap-5 pt-[15px] pb-[100px]">
        <div class="col-span-10 flex flex-col gap-[30px]">
            <h1 class="flex items-center gap-1">4 <span><svg class="w-[30px] h-[30px]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-wallet">
                        <path d="M19 7V4a1 1 0 0 0-1-1H5a2 2 0 0 0 0 4h15a1 1 0 0 1 1 1v4h-3a2 2 0 0 0 0 4h3a1 1 0 0 0 1-1v-2a1 1 0 0 0-1-1" />
                        <path d="M3 5v14a2 2 0 0 0 2 2h15a1 1 0 0 0 1-1v-4" />
                    </svg></span>4</h1>
            <h2>Упс, такой страницы не существует или она была удалена. Мы предлагаем вам вернуться на главную страницу. </h2>
        </div>
    </div>

    <div class="px-[15px] md:px-[50px]">
        <div class="flex ">
            <a wire:navigate href="{{ route('page.home') }}" class="text-lg/6 font-semibold text-[#00343A] bg-[#EEBF37] px-5 py-3 rounded-full hover:scale-105 transition duration-300 ease-in-out">Вернуться на главную страницу</a>
        </div>
    </div>
</div>
