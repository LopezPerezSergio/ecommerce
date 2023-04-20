<?php

namespace App\Http\Livewire;

use App\Models\Size;
use Livewire\Component;

class AddCartItemSize extends Component
{
    public $product;
    public $color_id = "";
    public $size_id = "";
    public $colors = [];
    public $sizes;

    public $quantity = 1;
    public $stock = 0;

    public function mount()
    {
        $this->sizes = $this->product->sizes;
    }
    
    public function render()
    {
        return view('livewire.add-cart-item-size');
    }

    public function updatedSizeId($value)
    {
        $size = Size::find($value);
        $this->colors = $size->colors;
    }

    public function updatedColorId($value)
    {
        $size = Size::find($this->size_id);
        $this->stock = $size->colors->find($value)->pivot->quantity;
    }

    public function decrement()
    {
        $this->quantity --;
        if ($this->quantity < 1) {
            $this->quantity = 1;
        }
    }

    public function increment()
    {
        $this->quantity ++;
        if ($this->quantity > $this->stock) {
            $this->quantity = $this->stock;
        }
    }
}
