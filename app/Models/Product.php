<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'product';
<<<<<<< HEAD
    // function protypes(){
    //     return $this->belongsTo(Protype::class,'type_id');
    //}
=======
    use HasFactory;
>>>>>>> 43eaf765fad734f622592846be60829ee6b67be5
}
