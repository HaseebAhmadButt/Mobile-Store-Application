<?php

namespace App\View\Components;

use Closure;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class productCard extends Component
{
    /**
     * Create a new component instance.
     */
    public $imageName = '';
    public $productName = '';
    public $productBrand = '';

    public $productOldPrice = '';
    public $productNewPrice = '';

    public function __construct($image, $name, $brandName, $oldPrice, $newPrice)
    {
        $this->imageName = $image;
        $this->productName = $name;
        $this->productBrand = $brandName;
        $this->productOldPrice = $oldPrice;
        $this->productNewPrice = $newPrice;


        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.product-card');
    }
}
