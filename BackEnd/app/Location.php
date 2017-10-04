<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use traveling_of_danang;

class Location extends Model
{
    //
    protected $table = 'locations';
    protected $fillable = ['locationID','locationName','picture','description','detail','map'];
    protected $primaryKey = 'locationID';
    // public $timestamps = false;
}
