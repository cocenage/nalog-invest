<div class="pt-[100px]">
    <nav class="px-[15px] md:px-[50px] w-full rounded-md text-sm">
        <ol class="list-reset flex ">
            <li class="group">
                <a
                    wire:navigate href="{{ route('page.home') }}"
                    class="text-[#E3BF46] group-hover:text-[#F8F1E5] transition duration-300 ease-in-out">Главная
                    <span class="mx-2 text-[#E3BF46] group-hover:text-[#F8F1E5] transition duration-300 ease-in-out">/</span>
                </a>
            </li>
            <li class="text-[#F8F1E5]">Услуги</li>
        </ol>
    </nav>

    <div class="px-[15px] md:px-[50px] xl:grid grid-cols-12 gap-5 pt-[15px] pb-[100px]">
        <div class="col-span-10 flex flex-col gap-[30px]">
            <h1>Услуги</h1>
            <h2>Наша цель — помочь вам принимать обоснованные решения и достигать ваших инвестиционных целей с минимальными налоговыми издержками.</h2>
        </div>
    </div>

    <livewire:products.all-products-list />

    <div class="flex w-full justify-center items-center py-[100px] xl:py-[200px] px-[15px] md:px-[50px]">
        <hr class="hidden sm:block w-full border-[1px] border-[#F8F1E5]">
        <div class="flex w-[450%] sm:w-[200%] md:w-[150%] lg:w-[90%] xl:w-[60%] justify-around">
            <a wire:navigate href="{{ route('page.contacts') }}" class="text-lg/6 font-semibold text-[#00343A] bg-[#EEBF37] px-5 py-3 rounded-full hover:scale-105 transition duration-300 ease-in-out">Проконсультироваться</a>
        </div>
        <hr class="hidden sm:block w-full border-[1px] border-[#F8F1E5]">
    </div>
</div>
