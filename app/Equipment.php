<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Equipment extends Model
{
	protected $fillable = array('project_id', 'tools');

	protected $table = 'equipment';
    //
    // DEFINE RELATIONSHIPS --------------------------------------------------
    // each equipment belongs to one project
    public function project() {
        return $this->belongsTo(Project::class); // this matches the Eloquent model
    }
}
