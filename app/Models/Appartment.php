<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appartment extends Model
{
    use HasFactory;

    protected $table = 'appartment';
    protected $fillable = [
        'title','detail','main_image','price_weck','chambre','available'
    ];
}
