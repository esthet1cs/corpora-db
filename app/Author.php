<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    protected $fillable = array('name', 'year');

    public function entries()
    {
        return $this->hasMany('App\Entry');
    }
}
