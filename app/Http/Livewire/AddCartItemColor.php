<?php

namespace App\Http\Livewire;

use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;

class AddCartItemColor extends Component
{
    public $product;
    public $color_id = "";
    public $colors;

    public $quantity = 1;
    public $stock = 0;

    public $options = [
        'size_id' => null
    ];

    public function mount()
    {
        $this->colors = $this->product->colors;
        $this->options['image'] = Storage::url($this->product->images->first()->url);
    }
    
    public function render()
    {
        return view('livewire.add-cart-item-color');
    }

    public function updatedColorId($value)
    {
        $color = $this->product->colors->find($value);
        //$this->stock = $color->pivot->quantity;
        $this->stock = quantity_available($this->product->id, $color->id);
        $this->options['color'] = $color->name;
        $this->options['color_id'] = $color->id;
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

    public function addItem()
    {
        Cart::add( ['id' => $this->product->id,
                    'name' => $this->product->name,
                    'qty' => $this->quantity,
                    'price' => $this->product->price,
                    'options' => $this->options]
                );
        $this->stock = quantity_available($this->product->id, $this->color_id);

        $this->reset('quantity');

        $this->emitTo('drawer-cart','render');
    }
}
