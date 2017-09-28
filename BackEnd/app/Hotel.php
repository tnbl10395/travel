<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use traveling_of_danang;

class Hotel extends Model
{
    //
    protected $table='hotels';
    protected $fillable = ['hotelName','locationID','cost','description','detail','address','map','rating'];
    protected $primaryKey = 'hotelID';
}
