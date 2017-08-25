<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
	protected $fillable = array('project_name', 'city');

	protected $table = 'projects';
    //
    // DEFINE RELATIONSHIPS --------------------------------------------------
    // each project HAS many equipments
	public function categories()
	    {
	    	return $this->hasMany(Category::class, 'project_id');
	    }    
}
