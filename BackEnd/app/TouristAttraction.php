<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use traveling_of_danang;

class TouristAttraction extends Model
{
    protected $table = 'touristAttractions';
    protected $primaryKey = 'touristAttractionID';
    protected $fillable = ['touristAttractionName','locationID','description','detail','map','rating'];
}
