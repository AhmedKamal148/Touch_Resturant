<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory;

    protected $fillable = [
        'first_address',
        'second_address',
        'opening_hours_1',
        'opening_hours_2',
        'contact_phone',
        'contact_email',
    ];
}
