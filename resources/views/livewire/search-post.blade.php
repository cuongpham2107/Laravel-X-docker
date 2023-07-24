<div class="flex flex-col items-center justify-center ">
    <h1>Search Results:</h1>
    <input 
        wire:model="search" 
        type="search" 
        class="bg-gray-200 px-2 py-2 rounded-md"
        placeholder="Search posts by title...">
    <div wire:loading.delay wire:target='search'>
        <ul>
            @foreach($posts as $post)
                <li>{{ $post->title }}</li>
            @endforeach
        </ul>
    </div>    
   
</div>