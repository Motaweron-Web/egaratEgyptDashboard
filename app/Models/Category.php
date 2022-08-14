<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
<<<<<<< HEAD

    protected $guarded=[];
    protected $table='category';


=======
    protected $guarded  =[];
    protected $table='category';
    public $timestamps = false;
>>>>>>> 91fe9df0711ab4431e8218237964c194205d772a
}
