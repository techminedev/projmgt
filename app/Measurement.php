<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\MaterialDetail;

class Measurement extends Model
{
    
    	protected $fillable = ['user_id', 'uom_code', 'uom_acroname', 'uom_description'];

    public function materialdetail() {
        return $this->hasMany(MaterialDetail::class);
    }

}
