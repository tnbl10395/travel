<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use traveling_of_danang;

class Image extends Model
{
    protected $table = 'images';
    protected $primaryKey = 'imageID';
    protected $fillable = ['hotelID','restaurantID','touristAttractionID','commentID','imageName'];
}
