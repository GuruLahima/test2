<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = array('name', 'project_id');

    protected $table = 'categories';

    // each category can have many subcategories
    public function subcategories() {
        return $this->hasMany(Subcategory::class, 'category_id');
    }

    public function project() {
        return $this->belongsTo(Project::class, 'project_id');
    }

}
