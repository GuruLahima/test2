<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subcategory extends Model
{
    //
    protected $fillable = array('category_id','name');

    protected $table = 'subcategories';

    //
    // DEFINE RELATIONSHIPS --------------------------------------------------
    // each subcategory belongs to one category
    public function category() {
        return $this->belongsTo(Category::class, 'category_id'); // this matches the Eloquent model
    }

    //each Subcategory can contain a lot of equipment
    public function equipment() {
        return $this->hasMany(Equipment::class, 'subcategory_id'); 
    }
}
