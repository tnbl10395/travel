<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use traveling_of_danang;

class City extends Model
{
    protected $fillable = ["cityID","cityName"];
    protected $primaryKey = "cityID";
    protected $table= "city";
    public $timestamps = false;
}
