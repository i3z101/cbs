<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cinema extends Model
{
    use HasFactory;

    protected $table= "cinema";
    protected $primarykey= 'cId';
    protected $fillable= ['cName', 'cAddress', 'cOperation', 'cBranches' ,'cRating'];

    public function movie(){
        return $this->hasMany(Movie::class, 'cinemaId', 'cId');
    }
}
