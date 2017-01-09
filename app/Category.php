<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name'
    ];

    protected $table = 'galleryCat';

    protected $timestamp = true;

    public function image()
    {
        return $this->belongsTo('App\Image', 'id', 'category');
    }
}
