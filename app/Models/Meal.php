<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Meal extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'image', 'meal_time'];
    protected $appends = ['image_url'];


    /*--- Accessories ---*/
    public function getImageUrlAttribute()
    {
        return asset('images/meals/' . $this->image);
    }
}
