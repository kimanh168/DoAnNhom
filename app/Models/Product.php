<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'product';
    protected $fillable = ['product_name','type_id','price','image','description','expiry','promotion'];
    public $timestamps = false;
    function protype(){
        return $this->belongsTo(Protype::class,'type_id');
    }

}
