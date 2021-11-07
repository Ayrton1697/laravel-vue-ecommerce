<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function user(){
        return $this->belongstO(User::class);
    }

    public function products(){
        return $this->belongsToMany(Product::class)
        ->withPivot('quantity');
    }
    //Una orden puede contener varios productos, y un producto puede pertenecer a distintas ordenes
}
