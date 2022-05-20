<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    public $timestamps = false;
    protected $table = 'orders';
    protected $fillable = ['customer_id','order_note','order_date','email','phone','address'];
   
    public function cus(){
        return $this->hasOne(Customer::class,'id','customer_id');
    }
}
