<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Equipment extends Model
{
	protected $fillable = array('tools', 'subcategory_id');

	protected $table = 'equipment';
    //
    // DEFINE RELATIONSHIPS --------------------------------------------------
    // each equipment belongs to one project

    //each equipment belongs to one subcategory
     public function subcategory() {
        return $this->belongsTo(Subcategory::class, 'subcategory_id'); 
    }
}
