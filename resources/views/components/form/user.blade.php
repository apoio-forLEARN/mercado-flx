<form wire:submit.prevent="submit">
    <input type="text" wire:model="name">
    @error('name') <span class="error">{{ $message }}</span> @enderror
    <br/>
    <input type="text" wire:model="email">
    @error('email') <span class="error">{{ $message }}</span> @enderror
    <br/>
    <button type="submit">Save Contact</button>
</form>
