<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use traveling_of_danang;

class Profile extends Model
{
    protected $table = 'profile';
    protected $primaryKey = 'userID';
    protected $fillable = ['fullname','age','address','avatar','phone','rating'];
}
