<?php

namespace App\Events;

use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class FormSaved
{
    use Dispatchable, SerializesModels;

    public $data;

    public function __construct($data)
    {
        $this->data = $data;
    }
}
