<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\task;
use Laravel\Sanctum\HasApiTokens;

class login extends Model
{
    use HasFactory, HasApiTokens;

    //mutator method to capitalize first alphabet

    protected $fillable = ['username','useremail','userpass'];
    public function getUsernameAttribute($name){

        return ucfirst($name);
    }    

    public function tasks(){
        return $this->hasmany(task::class);
    }


}
