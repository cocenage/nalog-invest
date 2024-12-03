<div class="flex flex-col lg:flex-row gap-2">
    @foreach($documents as $document)
    <a href="{{ Storage::url($document->path) }}" target="_blank">
        <p class="hover:text-black">{{ $document->name }}</p>
    </a>
    @endforeach
</div>
