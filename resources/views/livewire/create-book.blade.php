<div class="create">
    <h3>Create new book</h3>

    <form wire:submit="store">
        <div class="field">
            <label for="title">Book Title</label>
            <input type="text" name="" id="title" wire:model="title">
        </div>
        <div class="field">
            <label for="author">Book Author</label>
            <input type="text" name="" id="author" wire:model="author">
        </div>
        <div class="field">
            <label for="rating">Book Rating</label>
            <input type="text" name="" id="rating" wire:model="rating">
        </div>
        <Button>Add Book</Button>
    </form>
</div>
