<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    use HasFactory;

    protected $table= "ticket";
    protected $primarykey= 'id';
    protected $fillable= ['username', 'phone', 'email' , 'movieName', 'cinemaName' ,'amount'];
    public $timestapms= false;
}
