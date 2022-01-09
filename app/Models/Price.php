<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Price extends Model
{
    use \Backpack\CRUD\app\Models\Traits\CrudTrait;
    use HasFactory;

    protected $fillable = ['model', 'cartridge', 'refill', 'repairing', 'eternal_cartridge'];

    public function modelName()
    {
        return $this->belongsToMany(Models::class, 'models_price', 'price_id', 'models_id');
    }
}
