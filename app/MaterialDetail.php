<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Measurement;

class MaterialDetail extends Model
{
    
	protected $fillable = ['user_id', 'measurement_id', 'mat_code', 'mat_name', 'mat_category', 'mat_price'];



    public function measurement() {
        return $this->belongsTo(Measurement::class);
    }

}
