<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Prices extends Model
{
    public $timestamps = true;
    protected $table = 'reservation_type';
    //protected $primaryKey = 'reservationID';
    protected $fillable =
    [
        'name',
        'description',
        'reservation_rate',
    ];
}
