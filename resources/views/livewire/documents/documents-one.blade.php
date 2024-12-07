<div class="">
    @foreach($documents as $document)
    <a href="{{ Storage::url($document->path) }}" target="_blank">
        <p class="text-[#E3BF46] hover:underline">{{ $document->name }}</p>
    </a>
    @endforeach
</div>

