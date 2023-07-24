<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Post;

class SearchPost extends Component
{
    public $foo;
    public $search = '';
    public $page = 1;
 
    // protected $queryString = [
    //     'foo',
    //     'search' => ['except' => ''],
    //     'page' => ['except' => 1],
    // ];
 
    protected $queryString = ['search'];
 
    public function render()
    {
        return view('livewire.search-post', [
            'posts' => Post::where('title', 'like', '%'.$this->search.'%')->get(),
        ]);
        //return view('livewire.search-post');
    }
    
}
