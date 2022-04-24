<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Protype extends Model
{
<<<<<<< HEAD
    protected $table = 'protypes';
    public $primaryKey='type_id';
    function product(){
        return $this->hasMany(Product::class,'type_id');
    }
=======
    use HasFactory;
>>>>>>> 43eaf765fad734f622592846be60829ee6b67be5
}
