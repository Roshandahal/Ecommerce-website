<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class addcart extends Model
{
    use HasFactory;
    protected $table='addcarts';
    protected $fillable=['name1','price1','discount1','image1','name2','price2','discount2','image2','name3','price3','discount3','image3',];
}

