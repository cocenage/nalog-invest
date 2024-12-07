<div class="swiper-slide flex">
    <div class="flex">
    @forelse ($comments as $comment)
    <x-comment-card :data="$comment" />
    @empty
    @endforelse
    </div>
</div>
