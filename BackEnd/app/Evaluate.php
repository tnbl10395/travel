<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use traveling_of_danang;

class Evaluate extends Model
{
    protected $table = 'evaluate';
    protected $primaryKey = 'evaluateID';
    protected $fillable = ['userID','placeID','rating'];
}
