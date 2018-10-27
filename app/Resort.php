<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Resort extends Model
{
    public $timestamps = true;
    protected $table = 'area';
    //protected $primaryKey = 'reservationID';
    protected $fillable =
    [
        'area_name',
        'description',
        'image',
        'isDeleted',
    ];
}
