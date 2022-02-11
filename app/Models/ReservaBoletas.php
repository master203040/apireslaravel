<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReservaBoletas extends Model
{
    use HasFactory;
    protected $fillable = ['name','identificación','location','value','stock','description'];
}
