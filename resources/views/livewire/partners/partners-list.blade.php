<div class="flex flex-col gap-5 md:gap-[50px] ">
    @forelse ($partners as $partner)
    <x-partner-card :data="$partner" />
    @empty
    <p>Услуг нет</p>
    @endforelse
</div>
