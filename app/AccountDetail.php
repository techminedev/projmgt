<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AccountDetail extends Model
{
    //

    protected $fillable = ['user_id', 'acc_code', 'acc_title', 'acc_description'];
}
