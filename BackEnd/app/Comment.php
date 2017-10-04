<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use traveling_of_danang;

class Comment extends Model
{
    protected $table = 'comments';
    protected $fillable = ['userID','placeID','content','amountOfLike','amountOfDisLike'];
    protected  $primaryKey = 'commentID';
}
