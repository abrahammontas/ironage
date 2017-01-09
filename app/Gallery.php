<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'category'
    ];

    protected $timestamp = true;

    protected $table = 'gallery';

    public function Category()
    {
        return $this->hasOne('App\Category', 'id', 'category');
    }
}
