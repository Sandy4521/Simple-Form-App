<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Form extends Model
{
    protected $table = 'forms';
    protected $fillable = [
        'id',
        'item_type',
        'item_code',
        'item_name',
        'description',
    ];
}
