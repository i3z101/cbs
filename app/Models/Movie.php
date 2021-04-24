<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use HasFactory;

    protected $table= 'movie';
    protected $primarykey= 'mId';
    protected $fillable= ['mName', 'mGenre', 'mPoster', 'mDesc', 'mCreator', 'mGuide', 'mRating' , 'mTime', 'cinemaId'];

    public function cinema(){
        return $this->belongsTo(Cinema::class);
    }
}
