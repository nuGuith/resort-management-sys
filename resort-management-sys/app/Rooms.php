<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rooms extends Model
{
    public $timestamps = true;
    protected $table = 'room';
    //protected $primaryKey = 'reservationID';
    protected $fillable =
    [
        'room_name',
        'room_rate',
        'description',
        'image',
    ];
}
