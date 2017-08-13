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
    public function equipments() {
        return $this->hasMany(Equipment::class); // this matches the Eloquent model
    }
}
