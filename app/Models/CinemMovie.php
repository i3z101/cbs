<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CinemMovie extends Model
{
    use HasFactory;
    protected $table= "cinema_movie";
    protected $foreignkey= ['cinemaId', 'movieId'];
}
