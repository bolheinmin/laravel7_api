<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subcategory extends Model
{
    protected $fillable = ['name', 'category_id'];

    public function items()
    {
        return $this->hasMany('App\Item');
    }

    public function category()
    {
        return $this->belongsTo('App\Category');
    }
}
