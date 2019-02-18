<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    protected $fillable = [
    	'appointment_date',
    	'user_id',
    	'appointment'
    ];

    public function user() {
    	return $this->belongsTo('App\Models\User');
    }
}
