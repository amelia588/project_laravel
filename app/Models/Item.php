<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    // Define los atributos que son asignables en masa
    protected $fillable = ['name', 'description'];
}
