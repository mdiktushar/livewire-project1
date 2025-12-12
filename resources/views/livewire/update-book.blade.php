<div x-data="{ open: @entangle('isOpen') }">
    <a @click="open = true" class="btn btn-primary">Update</a>

    <div x-show="open" class="fixed inset-0 flex items-center justify-center z-50">
        <div @click.away="open = false" class="bg-white rounded-lg p-6 w-96 mx-4">
            <h2 class="text-lg font-bold mb-4">Add a Book</h2>
            <form wire:submit.prevent="submit" class="space-y-4">
                <div style="padding: 10px">
                    <label for="title" class="block mb-1 font-medium text-black">Book Title</label>
                    <input type="text" id="title" wire:model="title" class="input input-bordered w-full" />
                    @error('title')
                        <div class="error">{{ $message }}</div>
                    @enderror
                </div>
                <div style="padding: 10px">
                    <label for="author" class="block mb-1 font-medium text-black">Book Author</label>
                    <input type="text" id="author" wire:model="author" class="input input-bordered w-full" />
                    @error('author')
                        <div class="error">{{ $message }}</div>
                    @enderror
                </div>
                <div style="padding: 10px">
                    <label for="rating" class="block mb-1 font-medium text-black">Book Rating</label>
                    <input type="text" id="rating" wire:model="rating" class="input input-bordered w-full" />
                    @error('rating')
                        <div class="error">{{ $message }}</div>
                    @enderror
                </div>
                {{-- <button class="btn btn-primary w-full">Add Book</button> --}}
                <button type="submit" class="btn btn-primary w-full" wire:loading.attr="disabled">
                    <span wire:loading>Adding...</span>
                    <span wire:loading.remove>Add Book</span>
                </button>
            </form>
        </div>
    </div>
</div>
