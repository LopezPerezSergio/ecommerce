<?php

namespace App\Http\Livewire;

use App\Models\Category;
use Livewire\Component;

class Navbar extends Component
{
    public function render()
    {
        $categories = Category::all();
        
        return view('livewire.navbar', compact('categories'));
    }
}
