<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    public $timestamps = true;
    protected $table = 'message';
    //protected $primaryKey = 'reservationID';
    protected $fillable =
    [
    ];
}