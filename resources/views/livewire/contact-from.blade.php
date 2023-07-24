<div class="container">
    <form wire:submit.prevent="submit" class="flex flex-col space-y-2 justify-center items-center">
        <input type="text" wire:model="name" class="bg-gray-200 rounded-md px-2 py-2" placeholder="Name">
        @error('name') <span class="error">{{ $message }}</span> @enderror
     
        <input type="text" wire:model="email" class="bg-gray-200 rounded-md px-2 py-2" placeholder="Email">
        @error('email') <span class="error">{{ $message }}</span> @enderror
     
        <button type="submit">Save Contact</button>
    </form>
</div>
