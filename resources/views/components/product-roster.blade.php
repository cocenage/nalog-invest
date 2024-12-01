@props(['data'])

<li class="mb-2">
    <a wire:navigate href="{{ route('single.product', $data->slug) }}" class="text-[#736C6A] hover:text-black inline-block transition-transform duration-300 hover:translate-x-2">{{ $data->name }}</a>
</li>



