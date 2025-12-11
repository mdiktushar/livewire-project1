<div>
    {{-- page header --}}
    <livewire:page-header />
    {{-- page content --}}
    <ul class="list">
        @foreach ($books as $book)
            <li wire:key ="{{ $book->id }}">
                <button wire:click="delete({{ $book->id }})">
                    Delete
                </button>
                <h3>{{ $book->title }}</h3>
                <h4>{{ $book->author }}</h4>
                <p>Rating: {{ $book->rating }}</p>
            </li>
        @endforeach
    </ul>
</div>
