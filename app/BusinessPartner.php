<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BusinessPartner extends Model
{
    //
	protected $fillable = ['user_id', 'supplier_name', 'supplier_address', 'supplier_bank_account_name', 'supplier_bank_no','supplier_bank_branch'];


}
