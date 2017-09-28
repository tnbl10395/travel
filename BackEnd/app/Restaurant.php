<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use traveling_of_danang;

class Restaurant extends Model
{
    protected $table = 'restaurants';
    protected $fillable = ['restaurantName','locationID','description','detail','address','phone','rating'];
    protected $primaryKey = 'restaurantID';
}
