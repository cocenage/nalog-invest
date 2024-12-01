@props(['data'])
<a wire:navigate href="{{ route('single.product', $data->slug) }}">
    <div data-aos="fade-up" class="px-[15px] md:px-[50px] w-full h-[full] xl:h-[250px] flex flex-col justify-end group">
        <div class="flex h-[250px] xl:h-full ">
            <div class="flex flex-col xl:flex-row gap-[40px] w-full xl:items-center xl:gap-[20px] 2xl:gap-[200px]">
                <p class="text-2xl font-medium xl:font-normal font-  lg:text-3xl 2xl:text-4xl pt-[40px] xl:pt-0 leading-[1.5] col-span-3 xl:pb-[25px]"> {{ $data->name }}</p>
                <p class="text-lg col-span-7 xl:w-[1000px] pb-[30px] xl:pb-0"> {{ $data->title }}</p>
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
