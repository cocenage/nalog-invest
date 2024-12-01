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
</div>
