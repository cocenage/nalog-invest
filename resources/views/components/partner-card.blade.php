@props(['data'])

<a href="{{ $data->link }}" target="_blank" class="flex flex-col justify-center px-[15px] md:px-[50px] text-black group">
    <div class="relative flex flex-col md:flex-row md:space-x-5 space-y-3 md:space-y-0 rounded-2xl p-[15px] md:p-[25px] border border-white bg-white">
        <div class="w-full md:w-1/3 bg-white grid place-items-center relative mx-auto h-auto overflow-hidden">
            <img src="{{ url('storage', $data->image) }}" alt="tailwind logo" class="rounded-2xl object-cover image w-full h-auto relative z-0 scale-110 transition-all duration-300" />
        </div>
        <div class="w-full md:w-2/3 bg-white flex md:flex-col space-y-2 md:p-3 justify-between flex-col">
            <h3 class="text-2xl lg:text-3xl 2xl:text-4xl">{{ $data->description }}</h3>
            <div class="flex justify-between gap-3 flex-row">
                <div class="flex flex-col gap-1">
                    <p class="text-lg md:text-2xl font-medium">{{ $data->name }}</p>
                    <p class="text-lg md:text-2xl">{{ $data->title }}</p>
                </div>
                <div class="items-end h-full hidden lg:flex">
                    <span class="text-lg md:text-xl/6 font-semibold text-[#F8F1E5] bg-[#00343A] px-6 py-4 rounded-full flex gap-2 items-center group-hover:scale-105 transition duration-300 ease-in-out">{{ $data->name_link }}</span>
                </div>
                <div class="items-end h-full lg:hidden flex">
                    <span class="text-lg md:text-xl/6 font-semibold text-[#F8F1E5] bg-[#00343A] px-[10px] sm:px-[15px] py-[10px] sm:py-[15px] rounded-full flex items-center group-hover:scale-105 transition duration-300 ease-in-out">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 md:w-[30px] md:h-[30px]" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-move-up-right">
                            <path d="M13 5H19V11" />
                            <path d="M19 5L5 19" />
                        </svg>
                    </span>
                </div>
            </div>
        </div>
    </div>
</a>
