<div class="">
    <nav class="px-[15px] md:px-[50px] w-full rounded-md text-sm">
        <ol class="list-reset flex ">
            <li class="group">
                <a
                    wire:navigate href="{{ route('page.home') }}"
                    class="text-[#E3BF46] group-hover:text-[#F8F1E5] transition duration-300 ease-in-out">Главная
                    <span class="mx-2 text-[#E3BF46] group-hover:text-[#F8F1E5] transition duration-300 ease-in-out">/</span>
                </a>
            </li>
            <li class="text-[#F8F1E5]">О нас</li>
        </ol>
    </nav>
    @if($about)
    <div class="px-[15px] md:px-[50px] xl:grid grid-cols-12 gap-5 pt-[15px] pb-[100px]">
        <div class="col-span-10 flex flex-col gap-[30px]">
            <h1>описание</h1>
            <h2>дискр</h2>
        </div>
    </div>
    <div class="px-[15px] md:px-[50px] w-full h-full">
        <div class="flex flex-col gap-[50px] xl:grid xl:grid-cols-12 xl:gap-5">
            <div class="col-span-5">
                @if($about && $about->image)
                <div class="about-image">
                    <img src="{{ asset('storage/' . $about->image) }}" alt="about" class="rounded-2xl object-cover h-full w-full">
                </div>
                @else
                @endif
            </div>
            <div class="col-start-7 col-span-4 flex flex-col gap-[25px] xl:gap-[50px]">
                <div class="flex flex-col gap-[15px] xl:gap-[50px]">
                    @if($specifics && count($specifics) > 0)
                    @foreach($specifics as $item)
                    <p class="text-2xl lg:text-3xl 2xl:text-4xl">{{ $item['h1'] }}</p>
                    <p class="text-lg ">{{ $item['h2'] }}</p>
                    @endforeach
                    @else
                    @endif
                </div>
            </div>
        </div>
    </div>
    <div class="px-[15px] md:px-[50px] xl:grid grid-cols-12 gap-5 pb-[50px] md:pb-[100px] pt-[150px] lg:pt-[200px]">
        <div class="col-span-10 flex flex-col gap-[30px]">
            <h1>{{ $about->name }}</h1>
        </div>
    </div>
    @if($statistics && count($statistics) > 0)
    @foreach($statistics as $stat)
    <div data-aos="fade-up" class="px-[15px] md:px-[50px]">
        <div class="flex items-start flex-col xl:grid xl:grid-cols-12 gap-5 xl:items-center h-[150px] xl:h-[250px] rounded-[15px] justify-center">
            <div class=" col-span-5">
                <p class="text-2xl lg:text-3xl 2xl:text-4xl text-[#F8F1E5]">{{ $stat['h3'] }}</p>
            </div>
            <div class="">
                <p class="text-4xl lg:text-5xl 2xl:text-6xl font-medium text-[#F8F1E5] flex gap-2"> {{ $stat['h4'] }} </p>
            </div>
        </div>
        <hr class="w-full border-[1px] border-[#F8F1E5]">
    </div>
    @endforeach
    @else
    @endif
    <div class="flex w-full justify-center items-center py-[100px] xl:py-[200px] px-[15px] md:px-[50px]">
        <hr class="hidden sm:block w-full border-[1px] border-[#F8F1E5]">
        <div class="flex w-[450%] sm:w-[200%] md:w-[150%] lg:w-[90%] xl:w-[60%] justify-around">
            <a wire:navigate href="{{ route('page.contacts') }}" class="text-lg/6 font-semibold text-[#00343A] bg-[#EEBF37] px-5 py-3 rounded-full hover:scale-105 transition duration-300 ease-in-out">Проконсультироваться</a>
        </div>
        <hr class="hidden sm:block w-full border-[1px] border-[#F8F1E5]">
    </div>
    @else
    @endif
</div>
