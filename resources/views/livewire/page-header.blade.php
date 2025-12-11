<header class="flex justify-between">
    <div>
        <h2>Hi, {{ $name }}</h2>
        <p>{{ $subtitle }}</p>
    </div>

    {{-- <form action="">
        <span class="mr-2"></span>
        <input type="text" wire:model="name">
        <button wire:click.prevent="$refresh">Update</button>
    </form> --}}

    <form wire:submit="$refresh">
        <span class="mr-2"></span>
        <input type="text" wire:model.live.debounce.500ms="name">
        <button>Update</button>
    </form>
</header>
