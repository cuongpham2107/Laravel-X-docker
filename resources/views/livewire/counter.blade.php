<div style="text-align: center">
    <button class="px-4 py-2 bg-red-500" wire:click="increment">+</button>
    <h1>{{ $count }}</h1>
</div>
<div x-data>
    <span x-show="$wire.showMessage">...</span>
 
    <button x-on:click="$wire.toggleShowMessage()">Nhan</button>
</div>