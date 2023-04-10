<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class newslettersignin extends Model
{
    use HasFactory;
    protected $table='newslettersignins';
    protected $fillable=['productname','image','price','description','discount'];
}
