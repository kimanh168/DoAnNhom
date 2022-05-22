<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderDetail extends Model
{
    public $timestamps = false;
    protected $table = 'order_detail';
    protected $fillable = ['order_id','product_id','price','quantity'];

    public function pro(){
        return $this->hasOne(Product::class,'id','product_id');
    }
}
