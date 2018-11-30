<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Municipality;

class Barangay extends Model
{
    //
    
    protected $fillable = ['user_id', 'municipality_id', 'brgy_code', 'brgy_name'];


    public function municipality() {

    	return $this->belongsTo(Municipality::class);
    }

}
