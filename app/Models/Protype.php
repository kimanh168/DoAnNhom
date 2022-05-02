<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Protype extends Model
{
    protected $table = 'protypes';
    public $primaryKey='type_id';
    protected $fillable = ['type_id','type_name'];
    public $timestamps = false;
    // function product(){
    //     return $this->hasMany(Product::class,'type_id');
    // }

}
