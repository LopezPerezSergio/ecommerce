<?php

namespace App\Http\Livewire;

use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;

class AddCartItem extends Component
{
    public $product;
    public $quantity = 1;
    public $stock;

    public $options = [];

    public function mount()
    {
        $this->stock = $this->product->quantity;
        $this->options['image'] = Storage::url($this->product->images->first()->url);
    }
    
    public function render()
    {
        return view('livewire.add-cart-item');
    }

    public function decrement() 
    {
        $this->quantity --;
    }

    public function increment()
    {
        $this->quantity ++;
    }

    public function addItem()
    {
        Cart::add( ['id' => $this->product->id,
                    'name' => $this->product->name,
                    'qty' => $this->quantity,
                    'price' => $this->product->price,
                    'options' => $this->options]
                );

        $this->emitTo('drawer-cart','render');
    }
}
