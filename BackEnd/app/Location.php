<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use traveling_of_danang;

class Location extends Model
{
    //
    protected $table = 'locations';
    protected $fillable = ['locationName','picture','description','map'];
    protected $primaryKey = 'locationID';
    // public $timestamps = false;
}
