<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use traveling_of_danang;

class Comment extends Model
{
    protected $table = 'comments';
    protected $fillable = ['userID','hotelID','restaurantID','touristAttraction',
        'content','amountOfLike','amountOfDisLike','amountOfView'];
    protected  $primaryKey = 'commentID';
}
