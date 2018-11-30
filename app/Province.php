<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Municipality;

class Province extends Model
{
    
	protected $fillable = ['user_id', 'prov_code', 'prov_name'];
	
	public function municipality() {
    	return $this->hasMany(Municipality::class);
    }

}
