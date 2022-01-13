<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\Product as ProductModel;

class Product extends Component
{

    use WithFileUploads;

    public $name, $image, $description, $qty, $price;

    public function render()
    {
        $products = ProductModel::orderBy('created_at', 'DESC')->get();
        return view('livewire.product', [
            'products' => $products
        ]);
    }

    public function previewImage() {
        $this->validate([
            'image' => 'image|max:2048'
        ]);
    }
}
