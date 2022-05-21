<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $table = 'comment';
    protected $fillable = ['customer_id','product_id','content'];
   
    public function customer(){
        return $this->hasOne(Customer::class,'id','customer_id');
    }

    public function product(){
        return $this->hasOne(Product::class,'id','product_id');
    }
}
