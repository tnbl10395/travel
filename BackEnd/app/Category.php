<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use traveling_of_danang;

class Category extends Model
{
    protected $table = 'category';
    protected $primaryKey = 'categoryID';
    protected $fillable = ['locationID','categoryName'];
}
