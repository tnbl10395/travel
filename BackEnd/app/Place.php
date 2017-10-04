<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use traveling_of_danang;

class Place extends Model
{
    protected $table = 'place';
    protected $primaryKey = 'placeID';
    protected $fillable = ['categoryID','placeName','description','detail','address','cost','map','phone','rating'];
}
