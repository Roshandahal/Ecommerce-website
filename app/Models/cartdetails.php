<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cartdetails extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table='cartdetails';
    protected $fillable=['name','email','product_title','quantity','quantity2','quantity3','price'];

}
