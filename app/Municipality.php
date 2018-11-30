<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Province;
use App\Barangay;

class Municipality extends Model
{
    //

    protected $fillable = ['user_id', 'province_id', 'mun_code', 'mun_name'];


    public function province() {

    	return $this->belongsTo(Province::class);
    }

    public function barangay() {
    	return $this->hasMany(Barangay::class);
    }

}
