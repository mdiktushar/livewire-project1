<div>
    {{-- page header start --}}
    <livewire:page-header subtitle="Here's a list of your book reviews..." />
    {{-- page header end --}}

    {{-- search start --}}
    <input class="search" wire:model.live.debounce.300ms="term" type="text" placeholder="Search for Books...">
    {{-- search end --}}

    <livewire:create-modal />
    <br>

    {{-- page content start --}}
    <ul class="list">
        @foreach ($books as $book)
            <li wire:key ="{{ $book->id }}">
                <button wire:click="delete({{ $book->id }})">
                    Delete
                </button>
                <livewire:update-book />
                <h3>{{ $book->title }}</h3>
                <h4>{{ $book->author }}</h4>
                <p>Rating: {{ $book->rating }}</p>
            </li>
        @endforeach
    </ul>
    {{-- page content emd --}}
</div>
