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
            <li class="group">
                <a
                    wire:navigate href="{{ route('page.products') }}"
                    class="text-[#E3BF46] group-hover:text-[#F8F1E5] transition duration-300 ease-in-out">Услуги
                    <span class="mx-2 text-[#E3BF46] group-hover:text-[#F8F1E5] transition duration-300 ease-in-out">/</span>
                </a>
            </li>
            <li class="text-[#F8F1E5]">{{ $product->slug}}</li>
        </ol>
    </nav>

    <div class="px-[15px] md:px-[50px] xl:grid grid-cols-12 gap-5 pt-[15px] pb-[100px]">
        <div class="col-span-10 flex flex-col gap-[30px]">
            <h1>{{ $product->name}}</h1>
            <h2>{{ $product->description}}</h2>
        </div>
    </div>

    <livewire:products.product-repeater :product="$product" :key="$product->id" />

    <div class="mt-[50px]">
        <div class="bg-[#F8F1E5] flex flex-col xl:grid xl:grid-cols-12 gap-5 items-center mx-[15px] md:mx-[50px] h-[150px] xl:h-[250px] rounded-[15px] justify-center">
        <div class="col-start-2 col-span-4">
            <p class="text-2xl lg:text-3xl 2xl:text-4xl text-[#00343A]">Стоимость:</p>
        </div>
        <div class="">
            <p class="text-4xl lg:text-5xl 2xl:text-6xl font-medium text-[#00343A] flex gap-2">{{ $product->price }} <span>₽</span> </p>
        </div>
        </div>
    </div>

    <div class="flex w-full justify-center items-center py-[100px] xl:py-[200px] px-[15px] md:px-[50px]">
        <hr class="hidden sm:block w-full border-[1px] border-[#F8F1E5]">
        <div class="flex w-[450%] sm:w-[200%] md:w-[150%] lg:w-[90%] xl:w-[60%] justify-around">
            <a wire:navigate href="{{ route('page.contacts') }}" class="text-lg/6 font-semibold text-[#00343A] bg-[#EEBF37] px-5 py-3 rounded-full hover:scale-105 transition duration-300 ease-in-out">Проконсультироваться</a>
        </div>
        <hr class="hidden sm:block w-full border-[1px] border-[#F8F1E5]">
    </div>

</div>
