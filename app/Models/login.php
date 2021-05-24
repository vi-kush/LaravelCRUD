<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class login extends Model
{
    use HasFactory;

    //mutator method to capitalize first alphabet
    public function setUsernameAttribute($name){
        return ucfirst($value);
    }    


}
