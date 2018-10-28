<?php

namespace App;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class Reservations extends Model
{
    public $timestamps = true;
    protected $table = 'reservation';
    //protected $primaryKey = 'reservationID';
    protected $fillable =
    [
        'customer_id',
        'reservation_type_id',
        'no_of_rooms',
        'rooms',
        'start_datetime',
        'end_datetime',
        'downpayment_ref_no',
        'downpayment_date',
        'total_amount_due',
        'total_payment',
        'no_of_guests',
        'description',
        'note',
        'is_approved',
        'status',
        'customer_cancelled',
        'customer_reason',
    ];
    public function get_rtype($rtype){
        $result = DB::table('reservation_type')
            ->where('id', $rtype)
            ->get();
        return compact('result');
    }
}
