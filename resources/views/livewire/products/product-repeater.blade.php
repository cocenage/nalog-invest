<div>
    @forelse ($specifics as $specific)
    <div data-aos="fade-up" class="px-[15px] md:px-[50px] w-full h-full xl:h-[250px] flex flex-col justify-end group">
        <div class="flex flex-col gap-[30px] xl:grid xl:grid-cols-12 2xl:h-[250px] items-baseline content-center">
            <div class="col-span-5">
                <p class="text-2xl font-medium xl:font-normal lg:text-3xl 2xl:text-4xl pt-[40px] xl:pt-0 leading-[1.5] col-span-3 xl:pb-[25px] break-all">{{$specific['h1']}}</p>

            </div>
            <div class="col-span-5">
                <p class="text-lg col-span-7 pb-[30px] xl:pb-0 break-all">{{$specific['h2']}}</p>
            </div>
        </div>
        <hr class="w-full border-[1px] border-[#F8F1E5]">
    </div>
    @empty
    @endforelse
</div>
