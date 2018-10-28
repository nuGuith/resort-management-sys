<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RoomReservation extends Model
{
    public $timestamps = true;
    protected $table = 'reservation_room';
    //protected $primaryKey = 'reservationID';
    protected $fillable =
    [
        'reservation_id',
        'room_id',
    ];
}
