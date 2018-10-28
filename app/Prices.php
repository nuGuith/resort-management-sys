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
        'max_guest',
        'price_per_head',
    ];

    public function get_reservation_type(){
        $rtype = DB::table('reservation_type')
            ->where('isDeleted', 0)
            ->get();
        return $rtype;
    }
}
