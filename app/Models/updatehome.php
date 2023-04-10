<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class updatehome extends Model
{
    use HasFactory;
    protected $table='updatehomes';
    protected $fillable=['name','description',];
}
