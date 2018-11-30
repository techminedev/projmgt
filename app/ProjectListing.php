<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProjectListing extends Model
{
    
	protected $fillable = ['user_id', 'project_name', 'project_location'];

}
