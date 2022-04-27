<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Protype extends Model
{
    protected $table = 'protypes';
    public $primaryKey='type_id';
    // function product(){
    //     return $this->hasMany(Product::class,'type_id');
    // }

}
