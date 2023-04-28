<?php

namespace App\Http\Livewire;

use App\Models\Size;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;

class AddCartItemSize extends Component
{
    public $product;
    public $color_id = "";
    public $size_id = "";
    public $sizes;
    public $colors = [];

    public $quantity = 1;
    public $stock = 0;

    public $options = [];

    public function mount()
    {
        $this->sizes = $this->product->sizes;
        $this->options['image'] = Storage::url($this->product->images->first()->url);
    }
    
    public function render()
    {
        return view('livewire.add-cart-item-size');
    }

    public function updatedSizeId($value)
    {
        $size = Size::find($value);
        $this->colors = $size->colors;
        $this->options['size'] = $size->name;
    }

    public function updatedColorId($value)
    {
        $size = Size::find($this->size_id);
        $color = $size->colors->find($value);
        $this->stock = $color->pivot->quantity;
        $this->options['color'] = $color->name;
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

        $this->emitTo('drawer-cart','render');
    }
}
