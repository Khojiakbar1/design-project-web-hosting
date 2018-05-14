<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
    
    protected $fillable = ['name', 'parent_id'];

    /*
    |------------------------------------------------------------------------------------
    | Relations
    |------------------------------------------------------------------------------------
    */
    public function parent()
    {
        return $this->belongsTo(Category::class);
    }
}
