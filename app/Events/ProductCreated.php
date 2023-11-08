<?php

namespace App\Events;

namespace App\Events;

use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class ProductCreated
{
    use Dispatchable, SerializesModels;

    public $productData;

    public function __construct($productData)
    {
        $this->productData = $productData;
    }
}
