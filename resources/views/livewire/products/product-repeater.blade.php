<div>
    @forelse ($specifics as $specific)
        <div>
            <h3>{{ $specific['h1'] ?? 'Заголовок отсутствует' }}</h3>
            <p>{{ $specific['h2'] ?? 'Описание отсутствует' }}</p>
        </div>
    @empty
        <p>Нет специфических данных.</p>
    @endforelse
</div>
