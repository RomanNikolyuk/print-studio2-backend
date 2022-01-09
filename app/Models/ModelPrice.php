<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModelPrice extends Model
{
    use HasFactory;

    protected $fillable = ['models_id', 'price_id'];
    protected $table = 'models_price';
}
