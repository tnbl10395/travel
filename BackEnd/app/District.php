<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use traveling_of_danang;

class District extends Model
{
    protected $table = "district";
    protected $fillable = ["districtID","districtName"];
    protected $primaryKey = "districtID";
    public $timestamps = false;
}
