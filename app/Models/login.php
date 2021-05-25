<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\task;

class login extends Model
{
    use HasFactory;

    //mutator method to capitalize first alphabet

    public function getUsernameAttribute($name){

        return ucfirst($name);
    }    

    public function tasks(){
        return $this->hasmany(task::class);
    }


}
