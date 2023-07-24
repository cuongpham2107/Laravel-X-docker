<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ContactFrom extends Component
{
   
    public $name;
    public $email;
    
    protected $rules = [
        'name' => 'required|min:6',
        'email' => 'required|email',
    ];
    public function submit()
    {
        $this->validate();
 
        // Execution doesn't reach here if validation fails.
 
        Contact::create([
            'name' => $this->name,
            'email' => $this->email,
        ]);
    }
    public function render()
    {
        return view('livewire.contact-from');
    }
}
