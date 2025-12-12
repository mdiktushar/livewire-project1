<div x-data="{ open: @entangle('open') }">
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
        @foreach ($books as $item)
            <li wire:key ="{{ $item->id }}">
                <button wire:click="delete({{ $item->id }})">
                    Delete
                </button>

                <a wire:click="edit({{ $item->id }})" style="cursor: pointer">
                    Update
                </a>

                <h3>{{ $item->title }}</h3>
                <h4>{{ $item->author }}</h4>
                <p>Rating: {{ $item->rating }}</p>
            </li>
        @endforeach
    </ul>
    {{-- page content emd --}}


    {{-- Update Modal --}}
    <div x-show="open" class="fixed inset-0 flex items-center justify-center z-50 bg-black bg-opacity-50">

        <div @click.away="open = false" class="bg-white rounded-lg p-6 w-96 mx-4">

            <form wire:submit.prevent="update" class="space-y-4">

                <div>
                    <label class="block mb-1 font-medium text-black">Book Title</label>
                    <input type="text" wire:model="book.title" class="input input-bordered w-full" />
                    @error('book.title')
                        <div class="error">{{ $message }}</div>
                    @enderror
                </div>

                <div>
                    <label class="block mb-1 font-medium text-black">Book Author</label>
                    <input type="text" wire:model="book.author" class="input input-bordered w-full" />
                    @error('book.author')
                        <div class="error">{{ $message }}</div>
                    @enderror
                </div>

                <div>
                    <label class="block mb-1 font-medium text-black">Book Rating</label>
                    <input type="text" wire:model="book.rating" class="input input-bordered w-full" />
                    @error('book.rating')
                        <div class="error">{{ $message }}</div>
                    @enderror
                </div>

                <button type="submit" class="btn btn-primary w-full" wire:loading.attr="disabled">

                    <span wire:loading>Updating...</span>
                    <span wire:loading.remove>Update Book</span>
                </button>
            </form>
        </div>
    </div>
</div>
