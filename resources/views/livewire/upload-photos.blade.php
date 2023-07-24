<div>
    <form wire:submit.prevent="save">
        @if ($photos)
            Photo Preview:
            <img src="{{ $photos->temporaryUrl() }}">
        @endif
        <input type="file" wire:model="photos" multiple>
     
        @error('photos.*') <span class="error">{{ $message }}</span> @enderror
     
        <button type="submit">Save Photo</button>
    </form>
</div>
